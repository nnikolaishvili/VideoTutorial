@extends('master.admin-panel')

@section('content')
    <div style="padding: 10px; text-align: right">

    </div>

    <table id="articles-table" class="ui blue table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Created</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td style="width: 15%;">{{ $article->created_at }}</td>
                <td>
                    <button class="btn btn-info show" onclick="window.location.href = '{{ url('/admin/articles/'. $article->id) }}'">Show</button>
                </td>
                <td>
                    <button class="btn btn-success edit" onclick="window.location.href = '{{ url('/admin/articles/'. $article->id . '/edit') }}'">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger delete" onclick="window.location.href = '{{ url('/admin/articles/'. $article->id . '/delete') }}'">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">
                    <div class="ui right floated small primary labeled icon button">
                        <i class="user icon"></i>
                        <a href="{{ url('admin/articles/create') }}" style="color: white">New article</a>
                    </div>
                </th>
            </tr>
        </tfoot>
    </table>
@endsection
