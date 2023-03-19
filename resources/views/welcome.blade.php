@extends('layouts.homenavbar')

<!-- Content of all blog posts  -->
@section('content')

<main class="container">
    <div class="p-md-5 rounded bg-dark text-white">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Publish your passions, your way</h1>
            <p class="lead my-3">The best free blog website platforms are great if you want to promote your work online, but you've got a budget of exactly zero money. But saving isn't the only benefit the these free blog website platforms.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold text-decoration-none">Continue reading...</a></p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Show all newly created posts -->
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