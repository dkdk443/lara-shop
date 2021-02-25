@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">商品詳細</h5>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <label for="">商品名</label>
                    <div class="item">
                         {{ $product->product_name }}
                    </div>
                  </div>

                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                        <label>商品説明</label>
                        <div class="item">
                              {{ $product->detail }}
                        </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="">
                      <label>金額</label>
                      <div class="item">
                           {{ $product->price}}
                      </div>
                    </div>
                  </div>
                </div>
                <a type="button" name="" id="" class="btn btn-primary" btn-lg btn-block" href="{{route('products.edit', $product->id)}}">編集</a>
            </div>

          </div>

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="product">
                <img src="/uploads/{{ $product->image_url }}">
                <h5 class="title">{{ $product->product_name }}</h5>
              </div>
            </div>
            <hr>
            {{-- <div class="button-container">
              <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-facebook-f"></i>
              </button>
              <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-twitter"></i>
              </button>
              <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-google-plus-g"></i>
              </button>
            </div> --}}
          </div>
        </div>
      </div>
@endsection
