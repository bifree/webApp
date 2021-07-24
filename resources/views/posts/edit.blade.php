@extends('layouts.app')

@section('content')
<div>
    <div class="d-flexbox flex-column align-items-center mt-5">
        <div class="col-xl-5 col-lg-8 col-md-10 col-sm-11 post-card">
            <div class="card mb-5">
                <div class="card-header">
                    投稿の新規作成
                </div>
                <div class="card-body">
                    <form class="upload" method="POST">
                        {{ csrf_field() }}
                        <div class="md-form">
                            <label>タイトル</label>
                            <input type="text" placeholder="タイトル" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <label>本文</label>
                            <textarea name="message" class="form-control" id=""></textarea>
                        </div>
                        <div class="text-center">
                            <input type="text" class="btn btn-primary" value="更新する">
                            <input type="text" class="btn btn-danger" value="削除する">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection