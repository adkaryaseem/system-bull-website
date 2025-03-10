@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.photo.gallery.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Image
        </th>
        <th>
            Title
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($photos as $index=> $photo)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$photo->images)." height='100' width='100'>" !!}
            </td>
            <td>
                {{ $photo->title }}
            </td>
            <td>
                <a href="{{ route('admin.photo.gallery.edit',[$photo->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.photo.gallery.delete',[$photo->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection