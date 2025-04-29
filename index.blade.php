@extends('layouts.admin')

@section('page-title', 'Before & After Gallery')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Before & After Gallery</h2>
        <a href="{{ route('admin.gallery.create') }}"
           class="bg-beauty text-white px-4 py-2 rounded-lg shadow hover:bg-beauty-dark transition-all">
            + Add Gallery Item
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-100">
                <tr class="text-left text-gray-700 uppercase text-sm">
                    <th class="px-6 py-4">Client</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Images</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($galleryItems as $item)
                    <tr>
                        <td class="px-6 py-4">{{ $item->client_name }}</td>
                        <td class="px-6 py-4">{{ $item->category }}</td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <div class="w-12 h-12 bg-gray-200 rounded overflow-hidden">
                                    @if($item->before_image)
                                        <img src="{{ asset('storage/' . $item->before_image) }}" alt="Before" class="w-full h-full object-cover">
                                    @else
                                        <div class="flex items-center justify-center h-full text-xs text-gray-500">No image</div>
                                    @endif
                                </div>
                                <div class="w-12 h-12 bg-gray-200 rounded overflow-hidden">
                                    @if($item->after_image)
                                        <img src="{{ asset('storage/' . $item->after_image) }}" alt="After" class="w-full h-full object-cover">
                                    @else
                                        <div class="flex items-center justify-center h-full text-xs text-gray-500">No image</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 rounded-full text-xs {{ $item->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $item->is_published ? 'Published' : 'Draft' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 flex space-x-3">
                            <a href="{{ route('admin.gallery.show', $item->id) }}"
                               class="text-blue-600 hover:underline">View</a>
                            <a href="{{ route('admin.gallery.edit', $item->id) }}"
                               class="text-yellow-600 hover:underline">Edit</a>
                            <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No gallery items found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{ $galleryItems->links() }}
    </div>
@endsection