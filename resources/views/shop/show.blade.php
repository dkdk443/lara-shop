@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">商品説明</h5>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="col-md-5 pr-1">
                    <label for="">商品名</label>
                    <div class="item">
                         {{ $item->product_name }}
                    </div>
                  </div>

                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                        <label>商品説明</label>
                        <div class="item">
                              {{ $item->detail }}
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
                           {{ $item->price}}
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#" class="btn btn-primary">カートに入れる</a>
            </div>

          </div>

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="product">
                <img src="/uploads/{{ $item->image_url }}">
                <h5 class="title">{{ $item->product_name }}</h5>
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
