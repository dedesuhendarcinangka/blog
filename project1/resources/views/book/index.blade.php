@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
				<div class="panel-heading">Book
			<a href="{{route('book.create')}}" class="btn btn-sm btn-primary" > + </a></div>
			<div class="panel-body">
				<table class="table ">
				<tr>
				<th>No</th>
				<th>Nama Buku</th>
				<th>Author</th>
				<th>Publisher</th>
				<th>Year</th>
				<th>Tindakan</th>
				</tr>
				@forelse($books as $book)
				<tr>
				<td>{{$book->id}}</td>
				<td>{{$book->title}}</td>
				<td>{{$book->author->name}}</td>
				<td>{{$book->publisher->name}}</td>
				<td>{{$book->year}}</td>
				<td><a href="{{route('book.edit', $book->id)}}" class="btn btn-sm
				btn-warning"> Edit</a>
				<a href="{{route('book.show', $book->id)}}" class="btn btn-sm
				btn-success"> Show</a>
				<form action="{{route('book.destroy', $book->id)}}"
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