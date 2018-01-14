@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Create Book</div>
<div class="panel-body">
<form class="form-horizontal" method="POST"
action="{{ route('book.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group{{ $errors->has('title') ? ' has-error' :
'' }}">
<label for="title" class="col-md-4 control-label">Book
Name</label>
<div class="col-md-6">
<input id="title" type="text" class="form-control"
name="title" value="{{ old('title') }}" required autofocus>
@if ($errors->has('title'))
<span class="help-block">
<strong>{{ $errors->first('title') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('author_id') ? '
has-error' : '' }}">
<label for="author_id" class="col-md-4
control-label">Author</label>
<div class="col-md-6">
<select name="author_id" class="form-control">
@forelse($authors as $author)
<option value="{{$author->id}}">{{$author->name}}</option>
@empty
@endforelse
</select>
@if ($errors->has('author_id'))
<span class="help-block">
<strong>{{ $errors->first('author_id') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('publisher_id') ? '
has-error' : '' }}">
<label for="publisher_id" class="col-md-4
control-label">Publisher</label>
<div class="col-md-6">
<select name="publisher_id" class="form-control">
@forelse($publishers as $publisher)
<option value="{{$publisher->id}}">{{$publisher->name}}</option>
@empty
@endforelse
</select>
@if ($errors->has('publisher_id'))
<span class="help-block">
<strong>{{ $errors->first('publisher_id') }}</strong>
</span>
@endif
</div>
</div>
<div class="form-group{{ $errors->has('year') ? ' has-error' :
'' }}">
<label for="year" class="col-md-4 control-label">Year</label>
<div class="col-md-6">
<input id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required autofocus>
@if ($errors->has('year'))
<span class="help-block">
<strong>{{ $errors->first('year') }}</strong>
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