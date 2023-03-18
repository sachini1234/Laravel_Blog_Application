@extends('layouts.navbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Your Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="">
                    <form method="post" action="{{ route('posts.update', $posts->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Title of the post</label>
                            <input type="text" name="title" class="form-control" placeholder="Update your post title" required>
                        </div>
                        <div class="form-group">
                            <label>Description of the post</label>
                            <textarea class="form-control" name="description" placeholder="Update your post description" rows="10" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
