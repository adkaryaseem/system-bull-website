@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")

<a href="{{ route('admin.testimonials.create') }}">Create</a>
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
    @foreach ($testimonials as $index=> $testimonial)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$testimonial->image)." height='150' width='150'>" !!}
            </td>
            <td>
                {{ $testimonial->message }}
            </td>
            <td>
                <a href="{{ route('admin.testimonials.edit',[$testimonial->id]) }}">
                    <button type="submit">Edit</button>
                </a>
                <a href="{{ route('admin.testimonials.delete',[$testimonial->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection