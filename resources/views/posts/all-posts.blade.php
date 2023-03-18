@extends('layouts.navbar')

@section('content')

<div class="container">
    <div class="table-responsive-md">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $posts)
                <tr>
                    <th scope="row">#{{$posts->id}}</th>
                    <td>{{$posts->title}}</td>
                    <td>{{$posts->description}}</td>
                    <td>{{ date('Y/m/d', strtotime($posts->created_at)) }}</td>
                    <td>
                        <a href="{{ route('posts.show' , $posts->id) }}" class="btn btn-sm btn-success">View</a>
                        <a href="{{ route('posts.edit' , $posts->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ route('posts.delete' , $posts->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection