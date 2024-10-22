@extends('master')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">blog</a></li>
  </ul>
</nav>
        <p class="title">Our blog</p>
    </div>
  </div>
  <div class="container">
      
      @foreach($posts -> chunk(2) as $chunk)
      <div class="columns is-marginless">
            @foreach($chunk as $post)
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <img
        src="{{ url('/storage/'.$post -> image) }}"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      <p class="title is-4 has-text-white">{{ $post -> title }}</p>

      </div>

    </div>

    <div class="content">
            {{ $post ->excerpt }}
      <br />
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
</div>
        </div>
        @endforeach
    </div>
        @endforeach
    </div>
</section>

@endsection