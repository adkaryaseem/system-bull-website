@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
        <a href="{{ route('admin.introduction.create') }}">Create</a>
        <table border="1" width="100%">
            <tr>
                <th>
                    S.N
                </th>
                <th>
                    Image
                </th>
                <th>
                    Title
                </th>
                <th>
                    Description
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
                        {!! "<img src=".asset('storage/'.$introduction->image)." height='100' width='100'>" !!}
                    </td>
                    <td>
                        {{ $introduction->title }}
                    </td>
                    <td>
                        {{ $introduction->description }}
                    </td>
                    <td>
                        <a href="{{ route('admin.introduction.edit',[$introduction->id]) }}">
                            <button type="submit">Edit</button>
                        </a>
                        <a href="{{ route('admin.introduction.delete',[$introduction->id]) }}">
                            <button type="reset">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>

@endsection