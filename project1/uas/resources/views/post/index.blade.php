@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
				<div class="panel-heading">Post
			<a href="{{route('post.create')}}" class="btn btn-sm btn-primary" > + </a></div>
			<div class="panel-body">
				<table class="table ">
				<tr>
				<th>No</th>
				<th>Image</th>
				<th>Nama Post</th>
				<th>Kategory</th>
				<th>Author</th>
				<th>Dilihat sebanyak</th>
				<th>Tindakan</th>
				</tr>
				@forelse($posts as $post)
				<tr>
				<td>{{$post->id}}</td>
				<td><img src="/storage/{{$post->featured_image}}" alt=""
				height="80"></td>
				<td>{{$post->title}}</td>
				<td>{{$post->category->name}}</td>
				<td>{{$post->user->name}}</td>
				<td>{{$post->view}}</td>
				<td><a href="{{route('post.edit', $post->id)}}" class="btn btn-sm
				btn-warning"> Edit</a>
				<a href="{{route('post.show', $post->id)}}" class="btn btn-sm
				btn-success"> Show</a>
				<form action="{{route('post.destroy', $post->id)}}"
				method="post">
				{{ csrf_field() }}
				{{method_field('DELETE')}}
				<input type="submit" value="Delete" class="btn btn-sm
				btn-danger">
				</form>
				</td>
				</tr>
				@empty
				<tr>
				<td colspan="5">Data Kosong</td>
				</tr>
				@endforelse
				</table>
			</div>
		</div>
	</div>
</div>
</div>
@endsection