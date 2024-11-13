@extends('master')

@section('content')


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($slides as $slide)
        <div class="carousel-item active">
        <div class="title" align='center'>{{ $slide->title }}</div>
            <img src="{{ asset('/storage/'.$slide -> image) }}" class="d-block w-100" alt="Merry Christmas">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br><br><br>
<!-- services -->
<div class="is-divider" data-content="Our Service"></div>

    <div class="container">
        <div class="columns ">
        @foreach($services as $service)
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <a href="{{ url('service/'.$service->id) }}">
        <img
          src="{{ url('/storage/'.$service -> image) }}"
          alt="Placeholder image"
        />
      </a>
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      <p class="title is-4 has-text-black">{{ $service -> title }}</p>

      </div>

    </div>
        <button class='button is-primary'>More</button>
  </div>
</div>
        </div>
        @endforeach
        </div>
</div>
<br><br><br>
<div class="is-divider" data-content="Trends"></div>
<section class="hero is-primary">
  <div class="hero-body">

    <div class="container">
       <!-- Posts -->
     @foreach($posts -> chunk(2) as $chunk)
      <div class="columns mt-4 mb-4">
            @foreach($chunk as $post)
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <a href="{{ url('blog/'.$post->slug) }}">
        <img
          src="{{ asset('/storage/'.$post -> image) }}"
          alt="{{ $post->title }}"
        />
      </a>
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      <p class="title is-4 has-text-black">{{ $post -> title }}</p>

      </div>

    </div>

    <div class="content has-text-black">
            <!-- {{ $post ->excerpt }} -->
            {!! Str::limit($post ->excerpt, 90, ' ...') !!}

      <br />
      <time>{{ carbon\carbon::parse($post -> created_at)->ToFormattedDateString() }}</time>
    </div>
  </div>
</div>
        </div>
        @endforeach
    </div>
        @endforeach
    </div>
  </div>
</section>
@endsection



@section('stylesheets')
<!-- Include Bootstrap CSS in your <head> section -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Optional: Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- bulma divider -->
<link rel="stylesheet" href="{{ asset('css/bulma-divider.min.css') }}">


@endsection

@section('javascripts')
<!-- Include Bootstrap JS and Popper.js (place it before closing </body> tag) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
