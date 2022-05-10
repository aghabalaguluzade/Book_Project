@extends('templates.master')
@section('title',Auth::user()->name.' Sifarişlər')
@section('content')

<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li><a href="{{ route('Acount') }}">Hesabım</a></li>
    <li>Sifarişlərim</li>
  </ul>
</div>
</div>

<div id="account-edit" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Sifarişlərim</h1>
      @include('templates.errors')

      <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Soyad Ad</th>
                <th>E-poçt</th>
                <th>Ünvan</th>
                <th>Telefon</th>
                <th>Məbləğ</th>
                <th>Poçt</th>
                <th>Tarix</th>
                <th>Əməliyyatlar</th>
            </tr>
        </thead>
        <tbody>

          @foreach($orders as $order)

            <tr>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->postcode }}</td>
                <td>{{ $order->created_at }}</td>
                <td><a href="{{ route('Orderitems',$order->id) }}"><button class="btn btn-info">Bax</button></a></td>
            </tr>

            @endforeach

        </tbody>
    </table>
 
    </div>
  </div>
</div>


@endsection
@section('addcss')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css" />    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.semanticui.min.css" />
@endsection
@section('addjs')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>    
@endsection