@extends('layouts.app')

@section('content')

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
        
        <div>
            <div class="mt-5 d-flex justify-content-center">
                <div class="col-8">
                     <label>Title</label>
                     <input class="mb-2 form-control">
                </div>
            </div>
            <div class="mt-2 d-flex justify-content-center">
                <div class="col-8">
                     <label>Text</label>
                     <textarea class="form-control" column="40"></textarea>
                </div>
            </div>
        </div>
        </div>
        <div class="mt-5 text-right col-10">
            <a href="{ route('postsl.edit') }}"><div class="btn btn-primary">編集する</div></a>
            <a href="{ route('posts.delete') }}"><div class="btn btn-danger">削除する</div></a>
        </div>
    </div>
    
@endsection
