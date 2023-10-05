@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')

<br><br>
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1>Let's Raise the Digital Bar for Digital Education</h1>
    </div>
  </section>

  <section id="events" data-aos="fade-up" style="background-color: rgba(222, 224, 249, 0.798);">

    
        <div class="container" style="max-width: 850px;">
          
          
          <div class="card text-center">
            <div class="card-header">
              Admin Feature
            </div>
            <div class="card-body">
              <h5 class="card-title">EVENTS UPDATES</h5>
              {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
              <a href="{{ route('events.create') }}" class="btn btn-primary btn-block">Add An Event</a>
              <a href="{{ route('events.delete') }}" class="btn btn-danger btn-block">Delete An Event</a>
            </div>
          </div>
          <hr>
          <!-- Message if a post is posted successfully -->
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif
                 @if (count($post) > 0)
            @foreach ($post as $posts)
            <div class="row">
              <div class="card mb-3 p-3">
                <img class="card-img-top img-thumbnail" src="{{ asset('images/'.$posts->image) }}" alt="Card image cap" style="max-height: 480px; width:900px;">
                <div class="card-body">
                  <h5 class="card-title">{{$posts->title}}</h5>
                  <p class="card-text text-justify lead">
                    {{ \Illuminate\Support\Str::words(strip_tags($posts->description), 20, '...') }}
                    <span id="readMore{{$posts->id}}" style="display:none;">
                        {!! nl2br(e(strip_tags(html_entity_decode($posts->description)))) !!}
                    </span>
                </p>
                  <p class="card-text"><small class="text-muted">Last updated {{ $posts->updated_at->diffForHumans() }}</small></p>

                  <button class="btn btn-link" onclick="toggleDescription({{ $posts->id }})">
                    Read more
                </button>
                </div>
              </div>
              <br><hr>
            </div>      
@endforeach

          @else
            <p>No Posts found</p>
          @endif
        
  </section>
  
  
@endsection