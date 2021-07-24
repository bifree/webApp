@extends('layouts.app')
@section('content')

<div class="flex">
    <div class="text-center">
        <h2 class="login_title text-left d-inline-block mt-2">友達募集掲示板</h2>
    <div>
        <a href="{{ route('create') }}"><div class="btn btn-primary">記事を投稿する</div></a>
    </div>

@foreach($posts as $post)

    <div class="col-8 test card mt-5">
        <div class="card-header text-left">{{ $post->title }}</div>
            <div class="card-body">
                <div class="text-right"><a href="#">USER</a></div>
                <p>{{ $post->body }}</p>
                <div class="text-right">
                    <a href="{{ route('posts.edit') }}"><div class="btn btn-primary">編集する</div></a>
                    <a href="{{ route('posts.destroy') }}"><div class="btn btn-danger">削除する</div></a>
                </div>
            </div>
        </div>
    </div>

@endforeach

</div>


@endsection
