@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")

<a href="{{ route('admin.chairmanmessage.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Image
        </th>
        <th>
          Chairman Message
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($messages as $index=> $message)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$message->image)." height='150' width='150'>" !!}
            </td>
            <td>
                {{ $message->message }}
            </td>
            <td>
                <a href="{{ route('admin.chairmanmessage.edit',[$message->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.chairmanmessage.delete',[$message->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection