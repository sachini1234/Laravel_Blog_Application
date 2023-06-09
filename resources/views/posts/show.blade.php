@extends('layouts.navbar')

<!-- Show load content of one post -->
@section('content')

<div class="container">
    <div class="mb-5">
        <h5 class="title text-center text-center pt-3">{{$posts->title}}</h5>
        <p class="date text-warning text-center">On: {{ date('Y/m/d', strtotime($posts->created_at)) }}</p>
        <p class="description">{{$posts->description}}</p>
    </div>

    <!-- Add comment section -->
    <div>
        @comments(['model' => $posts])
    </div>
</div>

@endsection