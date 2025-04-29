@extends('layouts.admin')

@section('page-title', 'Edit Gallery Item')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Edit Gallery Item</h2>
        
        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            @include('admin.gallery.partials.form')
            
            <button type="submit"
                    class="bg-beauty text-white px-6 py-2 rounded-lg hover:bg-beauty-dark transition">
                Update
            </button>
        </form>
    </div>
@endsection