@extends('master')
@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">service</a></li>
  </ul>
</nav>
        <p class="title">Our services</p>


        </div>
    </div>

</section>
    </div>
  </div>
  <div class="container">
      
      @foreach($services -> chunk(3) as $chunk)
      <div class="columns mt-4 mb-4">
            @foreach($chunk as $service)
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <a href="{{ url('blog/'.$service->id) }}">
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
      <p class="title is-4 has-text-white">{{ $service -> title }}</p>

      </div>

    </div>

    <div class="content">
            <!-- {{ $service ->excerpt }} -->
            {!! Str::limit($service ->description, 90, ' ...') !!}

      <br />
      <time>{{ carbon\carbon::parse($service -> created_at)->ToFormattedDateString() }}</time>
    </div>
  </div>
</div>
        </div>
        @endforeach
    </div>
        @endforeach

@endsection