@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Edit Post</div>
<div class="panel-body">
<form class="form-horizontal" method="POST"
action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
{{ csrf_field() }}
{{method_field('PATCH')}}
<div class="form-group{{ $errors->has('title') ? ' has-error' :
'' }}">
<label for="title" class="col-md-4 control-label">Post
Name</label>
<div class="col-md-6">
<input id="title" type="text" class="form-control"
name="title" value="{{$post->title}}" required autofocus>
@if ($errors->has('title'))
<span class="help-block">
<strong>{{ $errors->first('title') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('content') ? ' has-error' :
'' }}">
<label for="content" class="col-md-4
control-label">Content</label>
<div class="col-md-6">
<textarea id="content" type="text" class="form-control"
name="content" value="{{ old('content') }}" required
autofocus>{{$post->content}}</textarea>
@if ($errors->has('content'))
<span class="help-block">
<strong>{{ $errors->first('content') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('category_id') ? '
has-error' : '' }}">
<label for="category_id" class="col-md-4
control-label">Category</label>
<div class="col-md-6">
<select name="category_id" class="form-control">
@forelse($categories as $category)
<option value="{{$category->id}}" @if($category->id ==
$post->category_id) selected @endif>{{$category->name}}</option>
@empty
@endforelse
</select>
@if ($errors->has('category_id'))
<span class="help-block">
<strong>{{ $errors->first('category_id') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('featured_image') ? '
has-error' : '' }}">
<label for="featured_image" class="col-md-4
control-label">Image</label>
<div class="col-md-6">
<input type="file" name="featured_image"
class="form-control" required>
@if ($errors->has('featured_image'))
<span class="help-block">
<strong>{{ $errors->first('featured_image') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group">
<div class="col-md-8 col-md-offset-4">
<button type="submit" class="btn btn-primary">
Save
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection