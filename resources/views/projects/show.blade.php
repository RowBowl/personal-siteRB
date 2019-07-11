@extends('layout')

@section('title', "Project")

@section('contents')
<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>
@endsection
