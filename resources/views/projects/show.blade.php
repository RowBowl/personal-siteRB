@extends('layout')

@section('title', "Project")

@section('contents')

<section class="section">
  <div class="container">
    <h1 class=" title is-1">{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <a href={{$project->link}}>{{$project->link}}</a>
  </div>
</section>
@endsection
