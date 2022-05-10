@extends('layouts.master')
@section('title','Bütün Sifarişlər')
@section('content')

<div id="account-edit" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Bütün Sifarişlər</h1>
      @include('settings.errors')

      <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>İstifadəçi</th>
                <th>Soyad Ad</th>
                <th>E-poçt</th>
                <th>Ünvan</th>
                <th>Telefon</th>
                <th>Məbləğ</th>
                <th>Poçt</th>
                <th>IP</th>
                <th>Status</th>
                <th>Qeyd</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>

          @foreach($orders as $order)

            <tr>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->postcode }}</td>
                <td>{{ $order->IP }}</td>
                <td>
                  <form action="{{ route('AllOrdersEditPost',$order->id) }}" method="POST">
                    @csrf
                  <div class="form-group" style="width:20px">
                    <select class="custom-select" name="status" id="status">
                        <option selected>{{ $order->status }}</option>
                        <option>Qəbul edildi</option>
                        <option>Rədd edildi</option>
                        <option>Göndərildi</option>
                        <option>Tamamlandı</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <textarea class="form-control" id="note" name="note" rows="5" cols="1" style="width: 80px">{{ $order->note }}</textarea>
                </div>
                </td>
                <td>{{ $order->created_at }}</td>
                <td><a href="{{ route('AllOrdersEdit',$order->id) }}"><button class="btn btn-info">Bax</button></a>
                <button type="submit" class="btn btn-success">Əlavə et</button>
                </td>
                </form>
            </tr>

            @endforeach

        </tbody>
    </table>
 
    <div class="modal fade" id="all-orders-list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Əlavə et</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('AllOrdersEditPost',$order->id) }}" method="POST">
              @csrf
              <div class="form-group">
                <select class="custom-select" name="status" id="status">
                    <option selected>Yeni</option>
                    <option>Qəbul edildi</option>
                    <option>Rədd edildi</option>
                    <option>Göndərildi</option>
                    <option>Tamamlandı</option>
                </select>
              </div>
              <div class="form-group">
                <label for="note" class="col-form-label">Qeyd:</label>
                <textarea class="form-control" id="note" name="note"></textarea>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                  <button type="submit" class="btn btn-primary">Təsdiq et</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>


@endsection
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" />    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.semanticui.min.css" />
@endsection
@section('footer')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>    
@endsection