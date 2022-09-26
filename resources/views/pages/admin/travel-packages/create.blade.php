@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"> Tambah Paket Travel</h1>
    </div>

    @if ( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" value="{{ old('location') }}">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input type="text" class="form-control" name="featured_event" value="{{ old('featured_event') }}">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language" value="{{ old('language') }}">
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" class="form-control" name="foods" value="{{ old('foods') }}">
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" class="form-control" name="departure_date" value="{{ old('departure_date') }}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" name="duration" value="{{ old('duration') }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" value="{{ old('type') }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Simpan
            </button>
        </form>
        </div>
    </div>
</div>

@endsection
