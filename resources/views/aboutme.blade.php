@extends('layout')

@section('title', 'About Me')
@section('htitle', 'About Me')

@section('contents')
<section class="section">
    <div class="container">
      <h1 class="title is-1">About Me</h1>
      <div class="columns">
        <div class="column">
          <h2 class="title is-2"> Education </h2>
          <p>University of Maryland, College Park</p>
          <p>B.S. in Computer Science</p>
          <p>Minor in Statistics</p>
          <p>Graduated: June 2019</p>
        </div>

        <div class="column">
          <h2 class="title is-2"> Interests </h2>
          <p>I am interested in concurrent and parallel programming,
          especially in Java. I also have an interest in web
          development and using tools such as React or the PHP framework, Laravel.</p>
        </div>
      </div>

    </div>
  </section>
@endsection
