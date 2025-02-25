@extends('backend.layouts.main')
@push('title')
    <title>Dashboard</title>
@endpush
@section('backend-main')
    <div class="d-flex">
        <div class="cntnr">
            <a href="{{ route('admin.introduction.index') }}">Introduction</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.photo.gallery.index') }}">Photo gallary</a>
        </div>
        <div class="cntnr">
            <a href="">contact Us</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.course.index') }}">Course</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.countries.index') }}">Country</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.scrolling.index') }}">Scrolling Image</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.chairmanmessage.index') }}">Chairman Message and Image</a>
        </div>
    </div>
@endsection