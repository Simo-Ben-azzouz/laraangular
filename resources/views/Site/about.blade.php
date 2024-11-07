@extends('master')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <!-- <li><a href="#">About</a></li> -->
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">{{ $page->title }}</a></li>
  </ul>
</nav>
<p class="title">{{ $page->title }}</p>
<p class="subtitle">{{ $page->excerpt }}</p>


        </div>
    </div>

</section>

<div class="container">
  <div class="columns">
    <div class="column">
      {!! $page->body !!}
    </div>
  </div>
</div>
@endsection
