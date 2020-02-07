@extends('master.admin-panel')

@section('content')
    <h1 style="margin: 20px">Edit article: {{ $article->title }}</h1>
    <form action="{{ url('admin/articles/' . $article->id) }}" method="POST"
          style="padding: 20px;border: 1px solid cadetblue; margin: 20px; background: cornflowerblue;">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title" style="font-weight: bold">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $article->title }}">
            @if($errors->has('title'))
                <div class="error-text">{{ $errors->first('title') }} </div>
            @endif
        </div>
        <div class="form-group">
            <label for="description" style="font-weight: bold">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Enter description text">{{ $article->description }}</textarea>
            @if($errors->has('description'))
                <div class="error-text">{{ $errors->first('description') }} </div>
            @endif
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
    </form>
@endsection
