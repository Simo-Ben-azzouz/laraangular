@extends('master')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/blog') }}">Blog</a></li>
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">{{ $post->title }}</a></li>
  </ul>
</nav>
<p class="title">{{ $post->title }}</p>
<p class="subtitle">{{ $post->excerpt }}</p>


        </div>
    </div>

</section>

    <div class="container">
        <div class="columns">
            <div class="column">
            <figure class="image is-4by3">
                <img src="{{ asset('/storage/'.$post->image) }}" alt="">
            </figure>
                <p>{!!$post->body!!}</p>
            </div>
        </div>
    </div>
@endsection