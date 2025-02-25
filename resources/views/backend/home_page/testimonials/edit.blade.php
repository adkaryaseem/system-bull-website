@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")
<form action="{{ route('admin.testimonials.update',[$testiminial->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table width="100%">
        <tr>
            <td>
               Choose new Image
            </td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
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