@extends('layouts.admin')

@section('page-title', 'Gallery Item Details')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Gallery Item Details</h2>

        <div class="grid md:grid-cols-2 gap-6 mb-6">
            <div>
                <h3 class="text-lg font-medium mb-2">Before</h3>
                <div class="bg-gray-100 rounded-lg overflow-hidden aspect-square">
                    @if($gallery->before_image)
                        <img src="{{ asset('storage/' . $gallery->before_image) }}" alt="Before Image" 
                             class="w-full h-full object-cover">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-500">No before image</div>
                    @endif
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-medium mb-2">After</h3>
                <div class="bg-gray-100 rounded-lg overflow-hidden aspect-square">
                    @if($gallery->after_image)
                        <img src="{{ asset('storage/' . $gallery->after_image) }}" alt="After Image" 
                             class="w-full h-full object-cover">
                    @else
                        <div class="flex items-center justify-center h-full text-gray-500">No after image</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="space-y-3 text-gray-800">
            <p><span class="font-medium">Client Name:</span> {{ $gallery->client_name }}</p>
            <p><span class="font-medium">Category:</span> {{ $gallery->category }}</p>
            <p><span class="font-medium">Status:</span> 
                <span class="px-2 py-1 rounded-full text-xs {{ $gallery->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                    {{ $gallery->is_published ? 'Published' : 'Draft' }}
                </span>
            </p>
            <p><span class="font-medium">Testimonial:</span></p>
            <div class="p-4 bg-gray-50 rounded-lg">
                {{ $gallery->testimonial ?? 'No testimonial provided.' }}
            </div>
        </div>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('admin.gallery.edit', $gallery->id) }}"
               class="bg-yellow-500 text-white px-5 py-2 rounded-lg hover:bg-yellow-600 transition-all">
                Edit
            </a>
            <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST"
                  onsubmit="return confirm('Are you sure you want to delete this gallery item?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-500 text-white px-5 py-2 rounded-lg hover:bg-red-600 transition-all">
                    Delete
                </button>
            </form>
        </div>
    </div>
@endsection