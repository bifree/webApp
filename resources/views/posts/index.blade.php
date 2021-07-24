@extends('layouts.app')

@section('content')

<div>
        <div class="center jumbotron green">

        <div class="text-center text-white green">
            <h1>Bifree Application</h1>
        </div>

    </div>

    <div class="text-center">
        <h2 class="login_title text-left d-inline-block mt-2">Sample</h2>
        
        <div>
            <a href=""><div class="btn btn-primary">記事を投稿する</div></a>
        </div>
        
        <div class="col-10 test card mt-5">
            <div class="card-header text-left">Sample Title</div>
            <div class="card-body">
                <div class="text-right"><a href="#">USER</a></div>
                <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。</p>
                <div class="text-right">
                    <a href="{{ route('posts.edit') }}"><div class="btn btn-primary">編集する</div></a>
                    <a href="{{ route('posts.delete') }}"><div class="btn btn-danger">削除する</div></a>
                </div>
            </div>
        </div>
        <div class="col-10 test card mt-5">
            <div class="card-header text-left">Sample Title</div>
            <div class="card-body">
                <div class="text-right"><a href="#">USER</a></div>
                <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。</p>
                <div class="text-right">
                    <a href="{{ route('posts.edit') }}"><div class="btn btn-primary">編集する</div></a>
                    <a href="{{ route('posts.delete') }}"><div class="btn btn-danger">削除する</div></a>
                </div>
            </div>
        </div>
        <div class="col-10 test card mt-5">
            <div class="card-header text-left">Sample Title</div>
            <div class="card-body">
                <div class="text-right"><a href="#">USER</a></div>
                <p>こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。こんにちは。
                こんにちは。こんにちは。こんにちは。こんにちは。</p>
                <div class="text-right">
                    <a href="{{ route('posts.edit') }}"><div class="btn btn-primary">編集する</div></a>
                    <a href="{{ route('posts.delete') }}"><div class="btn btn-danger">削除する</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    
@endsection
