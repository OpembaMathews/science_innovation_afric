@extends('layouts.master')
@section('title', 'Science Innovation Africa')
@section('content')
<section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1>Let's Raise the Digital Bar for Digital Education</h1>
    </div>
  </section>
  
  <div class="container">
    <h1>Add Post</h1>
    <section class="mt-3">
      <form method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- Error message when data is not inputted -->
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="card p-3">
          <label for="floatingInput">Title</label>
          <input class="form-control" type="text" name="title" value="{{ old('title') }}">
          <label for="floatingTextArea">Description</label>
          <div class="form-floating">
            <textarea class="form-control" name="description" id="description" rows="4">{{ old('description') }}</textarea>
            <label for="description">Description</label>
          </div>
          <br>
          <label for="formFile" class="form-label">Add Image</label>
          <img src="" alt="" class="img-blog">
          <input class="form-control" type="file" name="image">
        </div>
        <button class="btn btn-secondary m-3">Save</button>
      </form>
    </section>
      
  </div>
 

@endsection
