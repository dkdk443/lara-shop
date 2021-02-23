@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">スタッフ編集画面</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('staffs.update', $staff->id)}}">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <div class="form-group">
                      <label>名前</label>
                      <input type="text" class="form-control" placeholder="田中 太郎" value="{{$staff->staff_name}}" name="staff_name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>メールアドレス</label>
                        <input type="email" class="form-control" placeholder="" value="{{$staff->email}}" name="email">
                    </div>
                    <div class="form-group">
                        <label>パスワード</label>
                        <input type="password" class="form-control" placeholder="" value="{{$staff->password}}" name="password">
                    </div>
                  </div>
                </div>

                <div>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    {{-- <button type="button" aria-hidden="true" class="close">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button> --}}
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
                @endif

                </div>
                <div>
                    <a type="button" class="btn btn-secondary" href="{{route('staffs.index')}}">キャンセル</a>
                    <button class="btn btn-outline-primary" type="submit">更新</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>

@endsection
