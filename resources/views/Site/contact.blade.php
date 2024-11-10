@extends('master')
@section('content')

<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
    <nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li class="is-active"><a href="#" aria-current="page" class="has-text-black">Contact</a></li>
  </ul>
</nav>
<p class="title">Contact</p>
<p class="subtitle">please leave us a message</p>


        </div>
    </div>

</section>

    <br>
    <div class="container">
      @if(session('success'))
      <div class="notification is-success">
        {{ session('success') }}
      </div>
      @endif
    <div class="tile is-ancestor">
    <!-- First tile (Telephone) -->
    <div class="tile is-parent">
      <article class="tile is-child box notification">
        <p class="title">Telephone</p>
        <p class="subtitle">0699349419</p>
      </article>
    </div>
    <br>
    <!-- Second tile (Email) -->
    <div class="tile is-parent">
      <article class="tile is-child notification ">
        <p class="title">Email</p>
        <p class="subtitle">si.ghoststory@gmail.com</p>
      </article>
    </div>
  <br>
          <!-- terd tile (social media) -->
    <div class="tile is-parent">
      <article class="tile is-child notification is-primary">
        <p class="title">Social Media</p>
        <p class="subtitle"></p>
      </article>
    </div>
  <br>

        <div class="columns">
            <div class="column is-9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105884.89453243214!2d-6.939664485723569!3d33.969333764525686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76b871f50c5c1%3A0x7ac946ed7408076b!2sRabat!5e0!3m2!1sen!2sma!4v1731042263643!5m2!1sen!2sma" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="column is-3">
                <form action="{{ url('/contact') }}" method="post">
                    {{ csrf_field() }}
                    <!-- name -->
                    <div class="field">
                        <label for="name">Name</label>
                        <div class="control">
                            <input name="name" value="{{ old('name') }}" type="text" id="name" class="input @if($errors->has('name')) is-danger @endif" placeholder="Name">
                            @if($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <!-- email -->
                    <div class="field">
                        <label for="email">Email</label>
                        <div class="control">
                            <input name="email" value="{{ old('email') }}" type="text" id="email" class="input @if($errors->has('email')) is-danger @endif" placeholder="Email">
                            @if($errors->has('email'))
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <!-- message -->
                    <div class="field">
                        <label for="your message">your message</label>
                        <div class="control">
                            <textarea name="message" type="text" id="your-message" class="textarea @if($errors->has('message')) is-danger @endif" placeholder="your message">
                              {{ old('message') }}
                            </textarea>
                            @if($errors->has('message'))
                            <p class="help is-danger">{{ $errors->first('message') }}</p>
                            @endif
                        </div>
                    </div>

                    <button class="button is-primary" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection