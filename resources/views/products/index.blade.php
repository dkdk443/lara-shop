@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> 商品一覧 　<a href="{{route('products.create')}}"><i class="fas fa-plus-circle"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                        商品名
                    </th>
                    <th>
                        詳細
                    </th>
                    <th>
                        金額
                    </th>
                    <th>

                    </th>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>
                        {{ $product->id }}
                      </td>
                      <td>
                       <a href="{{route('products.show', $product->id)}}"> {{ $product->product_name }}</a>
                      </td>
                      <td>
                        {{ $product->detail }}
                      </td>
                      <td>
                        {{ $product->price }}
                      </td>
                      <td>
                          <a href="{{route('products.edit', $product->id)}}"><span><i class="far fa-edit fa-lg"></i></span></a>
                          <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fas fa-trash-alt fa-lg"></i>
                            </button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        <div class="col page-nate">
            {{ $products->links() }}
        </div>
        </div>

      </div>

  </div>


@endsection

