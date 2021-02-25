@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        @foreach ($items as $item)
        <div class="col-lg-3">
          <div class="card card-chart">
            <img src="/uploads/{{ $item->image_url }}" class="card-img-top">
            <div class="card-header">
              {{-- <h5 class="card-category">category</h5> --}}
              <a href="{{ route('shop.show', $item->id)}}">
              <h5 class="card-title">{{ $item->product_name }}</h5>
              </a>
            <div class="card-body">
                <p>{{ $item->detail}}</p>
                <p class="text-end">￥ {{ $item->price }}</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                  <a href="#" class="btn btn-primary">カートに入れる</a>
                {{-- <i class="fas fa-heart"></i> --}}
                {{-- <i class="far fa-heart"></i> --}}
              </div>
            </div>
          </div>
        </div>
    </div>
     @endforeach
</div>
@endsection
