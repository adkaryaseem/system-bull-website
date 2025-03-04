@extends('backend.layouts.main')

@section('backend-main')

@include("backend.partials.navbar")


<form action="{{ route('admin.whybull.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <table>
            <tr>
                <td>
                    Message
                </td>
                <td>
                    <input type="text" name="message">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
</form>
@endsection