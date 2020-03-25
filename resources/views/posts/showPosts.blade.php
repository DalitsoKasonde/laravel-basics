@extends('layouts.app')


@section('content')
    <h1>Posts </h1>

            <div class="well">
              <h1>Title</h1>  <h3> {{$post->title}}</h3>
               <h1>Date</h1> <small>Written on {{$post->created_at}} </small>
            </div>
    
@endsection