@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">category
                <a href="{{route('categories.crate')}}">tambah data</div>

                <div class="panel-body">
                <table>
                <tr>
                <th>no</th>
                 <th>image</th>
                  <th>nama post</th>
                  <th>kategory</th>
                  <th>dilihat sebanyak</th>
                  <th>tindakan</th>
                  </tr>
                  @forelse($posts as $post)
                  <tr>
                <td>{{$post->id}}</td>
                 <td>{img    src="/storege/{{$post->featured_image}}
                  <th>-</th>
                  </tr>
                  @empty
                  <tr>
                  <th colspan="3">data belum ada</th>
                  </tr>
                  </table>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @enforelse

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
