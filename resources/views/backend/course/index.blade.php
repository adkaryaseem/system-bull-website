@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.course.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Course Title
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($courses as $index=>$course )
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {{ $course->name }}
            </td>
            <td>
                <a href="{{ route('admin.course.edit',[$course->id]) }}">Edit</a>
                <a href="{{ route('admin.course.delete',[$course->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection