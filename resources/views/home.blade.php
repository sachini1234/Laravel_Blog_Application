@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="text-center pt-3">{{ __('Create Your Post') }}</h3>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="mb-2">Title of the post:</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter your post title" required>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Description of the post:</label>
                            <textarea class="form-control" name="description" placeholder="Enter your post description" rows="10" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
