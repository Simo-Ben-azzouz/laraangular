@extends('master')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/services') }}">Services</a></li>
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">{{ $service->title }}</a></li>
  </ul>
</nav>
<p class="title">{{ $service->title }}</p>
<p class="subtitle">{{ $service->description }}</p>


        </div>
    </div>

</section>

    <div class="container">
        <div class="columns">
            <div class="column">
            <figure class="image is-4by3">
                <img src="{{ asset('/storage/'.$service->image) }}" alt="">
            </figure>
                <p>{!!$service->body!!}</p>
            </div>
        </div>
    </div>
@endsection