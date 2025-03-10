@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.scrolling.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Image
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($scrollings as $index=> $scrolling)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$scrolling->images)." height='150' width='150'>" !!}
            </td>
            <td>
                <a href="{{ route('admin.scrolling.edit',[$scrolling->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.scrolling.delete',[$scrolling->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection