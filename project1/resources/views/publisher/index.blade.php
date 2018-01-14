@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Publisher
                <a href="{{route('publisher.create')}}" class="btn btn-sm btn-primary"> + </a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                        <th>No</th>
                        <th>Nama Publisher</th>
                        <th>Tindakan</th>
                        </tr>
                        @forelse($publishers as $publisher)
                        <tr>
                        <td>{{$publisher->id}}</td>
                        <td>{{$publisher->name}}</td>
                        <td><a href="{{route('publisher.edit', $publisher->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('publisher.show', $publisher->id)}}" class="btn btn-sm btn-success">Show</a>
                        </td>
                        <td><form action="{{route('publisher.destroy', $publisher->id)}}" method="post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        </td>
                        </tr>
                        @empty
                        <tr>
                        <td colspan="3">Data Kosong</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection