@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> スタッフ一覧 　<a href="/staffs/create"><i class="fas fa-plus-circle"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                        名前
                    </th>
                    <th>
                        メールアドレス
                    </th>
                    <th>

                    </th>
                  </thead>
                  <tbody>
                    @foreach ($staffs as $staff)
                    <tr>
                      <td>
                        {{ $staff->id }}
                      </td>
                      <td>
                        {{ $staff->staff_name }}
                      </td>
                      <td>
                        {{ $staff->email }}
                      </td>
                      <td>
                          <a href="{{route('staffs.edit', $staff->id)}}"><span><i class="far fa-edit fa-lg"></i></span></a>
                          <form action="{{route('staffs.destroy', $staff->id)}}" method="POST">
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
        </div>
      </div>
  </div>
@endsection

