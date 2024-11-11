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

</section>
    </div>
  </div>
  <div class="container">
        <div class="columns">
          <div class="column">
          <div class="tabs is-centered">
              <ul>
                <li class="is-active"><a>Pictures</a></li>
                <li><a>Music</a></li>
                <li><a>Videos</a></li>
                <li><a>Documents</a></li>
              </ul>
            </div>
          </div>
        </div>
      @foreach($posts -> chunk(2) as $chunk)
      <div class="columns mt-4 mb-4">
            @foreach($chunk as $post)
        <div class="column">
        <div class="card">
  <div class="card-image">
    <figure class="image is-16by9">
      <a href="{{ url('blog/'.$post->id) }}">
        <img
          src="{{ url('/storage/'.$post -> image) }}"
          alt="Placeholder image"
        />
      </a>
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
      <p class="title is-4 has-text-white">{{ $post -> title }}</p>

      </div>

    </div>

    <div class="content">
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
        <div class="is-marginless columns mt-4 mb-4">
    
    <div class="column is-half" align='left'>
        @if($posts->currentPage() > 1)
            <a href="{{ $posts->previousPageUrl() }}" class="button is-dark">
                <span>Previous</span>
            </a>
        @endif
    </div>

    <div class="column is-half" align='right'>
        @if ($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}" class="button is-dark">
                <span>Next</span>
            </a>
        @endif
    </div>

</div>
@endsection