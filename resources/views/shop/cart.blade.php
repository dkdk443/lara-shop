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
                    @if(isset($cart))
                        @foreach ($cart as $cartItem)
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-1">{{ $cartItem->product_name }} </h5><span>{{ $cartItem->price }}円</span>
                                </div>
                                <form action="{{ route('shop.removeCart', $cartItem->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit">削除</button>
                                </form>
                            </div>
                        @endforeach
                    @else
                    <p>カートは空です</p>
                    @endif
                    </ul>

                <hr>
                <a href="{{route('top')}}" class="btn btn-primary">商品選択を続ける</a>
                @if(isset($cart))
                <a href="{{route('shop.flushCart')}}" class="btn btn-primary">カートを空にする</a>
                @endif
            </div>

          </div>

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
                <h5 class="title">合計金額</h5>
              </div>
            <div class="card-body">
              <div class="product">
                @if(isset($catt))
                  <h4 class="price">{{ $sum }} 円</h4>
                  <h5>{{ $count }}点</h5>
                @endif
              </div>
              <hr>
              <a href="" class="btn btn-primary">購入に進む</a>
            </div>

          </div>
        </div>
      </div>
@endsection
