@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")
<form action="{{ route('admin.whybull.update',[$whybull->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table width="100%">
        <tr>
            <td>
                Message
            </td>
            <td>
                <input type="text" name="message">
            </td>
        </tr>
        <td>
            <center>
                   <button type="submit">Update</button>
            </center>
        </td>
    </table>
</form>
@endsection