@extends('layouts.app')

@section('content')

  <div class="card card-default">
    <div class="card-header">
      Create Post
    </div>

    <div class="card-body">
      <form class="" action="{!! route('posts.store') !!}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" value="">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control" rows="5" cols="5"></textarea>
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="content" class="form-control" rows="5" cols="5"></textarea>
        </div>

        <div class="form-group">
          <label for="published_at">published At</label>
          <input type="text" name="published_at" id="published_at" class="form-control" value="">
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" id="image" class="form-control" value="">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Create Post</button>
        </div>

      </form>
    </div>
  </div>

@endsection
