@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.countries.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Country Name
        </th>
        <th>
            Status
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($countries as $index=>$country)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {{ $country->name }}
            </td>
            <td>
                {{ $country->status }}
            </td>
            <td>
                <a href="{{ route('admin.countries.edit',[$country->id]) }}">Edit</a>
                <a href="{{ route('admin.countries.delete',[$country->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

@endsection