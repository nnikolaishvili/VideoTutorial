@extends('master.admin-panel')

@section('content')
    <div style="padding: 10px; text-align: right">
        <button class="btn btn-info"
                onclick="window.location.href = '{{ url('admin/articles/create') }}'">Create</button>
    </div>

    <table class="table table-dark table-hover" style="border: 5px solid black">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td style="width: 30%">{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td><button class="btn btn-outline-info" onclick="window.location.href = '{{ url('/admin/articles/'. $article->id) }}'">Show</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
