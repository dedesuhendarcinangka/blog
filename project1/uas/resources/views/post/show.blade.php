@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">{{$post->title}}</div>
<div class="panel-body">
<img src="/storage/{{$post->featured_image}}" alt="..."
class="img-thumbnail">
<br>
{{$post->content}}
</div>
<div class="panel-footer">
Dilihat sebanyak : {{$post->view}} Kali
</div>
</div>
</div>
</div>
</div>
@endsection