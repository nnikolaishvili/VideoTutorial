@extends('master.admin-panel')

@section('content')
    <h1 style="margin: 20px">Article details</h1>
    <div style="border: 1px solid black; margin: 10px; padding: 10px; background: aliceblue">
        <div style="font-weight: bold">{{ $article->title }}</div>
        <div>{{ $article->description }}</div>

        <div style="display: flex; justify-content: flex-end">
            <button class="btn btn-outline-info"
                    onclick="window.location.href = '{{ '/admin/articles/'. $article->id . '/edit'}}'"
                    style="margin-right: 10px">Edit</button>
            <form action="{{ url('/admin/articles/' . $article->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
