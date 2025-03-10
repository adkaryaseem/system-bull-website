@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.homeintroduction.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Image
        </th>
        <th>
          Introduction Message
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($introductions as $index=> $introduction)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$introduction->image)." height='150' width='150'>" !!}
            </td>
            <td>
                {{ $introduction->message }}
            </td>
            <td>
                <a href="{{ route('admin.homeintroduction.edit',[$introduction->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.homeintroduction.delete',[$introduction->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection