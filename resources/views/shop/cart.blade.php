@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h5 class="title">カート</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <ul>
                        {{-- @foreach ($cart as $cartItem)
                             <li>{{ $cartItem }}</li>
                        @endforeach --}}
                    </ul>
                </div>
                <hr>
                <a href="" class="btn btn-primary">購入に進む</a>
            </div>

          </div>

        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="product">
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
