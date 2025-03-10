@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.whybull.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
          Why Bull Message
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($why as $index=> $bull)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {{ $bull->message }}
            </td>
            <td>
                <a href="{{ route('admin.whybull.edit',[$bull->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.whybull.delete',[$bull->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
@endsection