@extends('layouts.homenavbar')

@section('content')

<main class="container">
    <div class="p-md-5 rounded bg-dark text-white">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold text-decoration-none">Continue reading...</a></p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $posts)
        <div class="col">
            <div class="card border-dark my-4">
                <div class="card-header text-white bg-dark">
                    <h5 class="card-title text-center">{{$posts->title}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Created at: {{ date('Y/m/d', strtotime($posts->created_at)) }}</p>
                    <p class="card-text">{{$posts->description}}</p>
                </div>
                <div class="card-footer text-white">
                    <a href="{{ route('posts.show' , $posts->id) }}" class="link-dark">Continue reading</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</main>

@endsection