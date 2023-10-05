@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')

<br><br>

<section id="events" data-aos="fade-up" style="background-color: rgba(207, 213, 250, 0.803);">
    <div class="container" style="max-width: 850px;">
        <div class="card text-center">
            <div class="card-header">
                Admin Control
            </div>
            <div class="card-body">
                <h5 class="card-title">DELETE EVENTS</h5>
                
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
                        <img class="card-img-top img-thumbnail" src="{{ asset('images/'.$posts->image) }}" alt="Card image cap" style="max-height: auto; width:900px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $posts->title }}</h5>
                            <p class="card-text text-justify lead">
                                {!! e(strip_tags(html_entity_decode($posts->description ))) !!}
                                {{-- {!! nl2br(e(strip_tags(html_entity_decode($posts->description)))) !!} --}}
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated {{ $posts->updated_at->diffForHumans() }}</small></p>
                            
                            <form action="{{ route('d_exchange.exchangedestroy', $posts->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-block" onclick="deleteEdupostt({{ $posts->id }})">Delete</button>
                            </form>
                        </div>
                    </div>
                <br><hr>
                </div>
            @endforeach

        @else
        <p>No Posts found</p>
        @endif
    </div>
</section>
  
  
@endsection