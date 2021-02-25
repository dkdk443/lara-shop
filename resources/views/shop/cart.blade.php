@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="title">カート</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                        @foreach ($cart as $cartItem)
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <div class="mb-1">{{ $cartItem->product_name }} </div><span>{{ $cartItem->price }}円</span>
                                </div>
                                <a href="#"><small>削除</small></a>
                            </div>
                        @endforeach
                    </ul>

                <hr>

            </div>

          </div>

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="product">
                  合計金額

                  3,900 円
              </div>

              <a href="" class="btn btn-primary">購入に進む</a>
            </div>
            <hr>

          </div>
        </div>
      </div>
@endsection
