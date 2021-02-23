@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">商品登録画面</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="/products">
                @csrf
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>商品名</label>
                      <input type="text" class="form-control" placeholder="" value="" name="product_name">
                    </div>
                    <div class="form-group">
                  </div>
                </div>
                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">商品説明</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="detail"></textarea>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>金額</label>
                        <input type="email" class="form-control" placeholder="" value="" name="price">
                    </div>

                  </div>
                  <div class="col-md-12">
                    <label for="formFile" class="form-label">商品画像</label>
                    <input class="form-control" type="file" id="formFile" name="image_url">
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
                    <a type="button" class="btn btn-secondary" href="{{route('products.index')}}">キャンセル</a>
                    <button class="btn btn-outline-primary" type="submit">保存</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
