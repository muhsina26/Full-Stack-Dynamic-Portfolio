@extends('layout._app')

@section('title', 'Home - Muhsina')

@section('content')
  <section class="mainSection">
    <div class="profile-photo">
      <img src="{{ asset('images/me.jpg') }}" alt="Muhsina Photo" />
    </div>

    <div class="intro">
      <h1>
        Hi, My name is <span class="purple">Muhsina</span><br>
        and I am an <span class="text-light-purple">Android Developer</span>
      </h1>
      <span id="element"></span>
    </div>
  </section>
@endsection