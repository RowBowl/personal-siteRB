@extends('layout')

@section('title', 'Projects')

@section('contents')
<section class="section">
  <div class="container">
    <h1 class='title is-2 '>Projects</h1>

@foreach($projects as $project)

    <li>
      <a href="/projects/{{$project->id}}">{{$project->title}}</a>
    </li>


@endforeach
  </div>

  </section>
@endsection
