@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">Title : {{$book->title}}</div>
<div class="panel-body">
<br>
Author : {{$book->author->name}}
<br>
Publisher : {{$book->publisher->name}}
<br>
</div>
<div class="panel-footer">
Year : {{$book->year}}
</div>
</div>
</div>
</div>
</div>
@endsection