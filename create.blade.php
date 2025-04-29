@extends('layouts.admin')

@section('page-title', 'Create Gallery Item')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Create Gallery Item</h2>
        
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @include('admin.gallery.partials.form')
            
            <button type="submit"
                    class="bg-beauty text-white px-6 py-2 rounded-lg hover:bg-beauty-dark transition">
                Save
            </button>
        </form>
    </div>
@endsection