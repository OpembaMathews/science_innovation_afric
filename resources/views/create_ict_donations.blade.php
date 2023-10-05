@extends('layouts.master')
@section('title', 'Science Innovation Africa')
@section('content')
    
<section class="mt-3">
    <br><br>
    <div class="container">
        <div class="section-title">
            <h2> CREATE A POST </h2>
        </div>
        <form method="post" action="{{ route('donationsEd.donationsstore') }}" enctype="multipart/form-data">
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
    </div>
</section>
 

@endsection
