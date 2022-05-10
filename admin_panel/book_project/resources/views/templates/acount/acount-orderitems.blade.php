@extends('templates.master')
@section('title','Sifarişlər Siyahısı')
@section('content')

<div class="container">
    <div class="inner">
      <ul class="breadcrumb">
      <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
      <li><a href="{{ route('Acount') }}">Hesabım</a></li>
      <li><a href="{{ route('Orders') }}">Sifarişlərim</a></li>
      <li>Sifarişlər Siyahısı</li>
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
                <th>Şəkil</th>
                <th>Kitab Adı</th>                
                <th>Sayı</th>
                <th>Qiymət</th>
                <th>Cəm</th>
            </tr>
        </thead>
        <tbody>

          @foreach($orderitems as $orderitem)

            <tr>
                <td><img src="{{ asset($orderitem->books->books_img) }}" alt="{{ $orderitem->books->books_name }}" style="width: 110px; height:110px;" /></td>
                <td><a href="{{ route('BooksProduct',$orderitem->books->slug) }}">{{ $orderitem->books->books_name }}</a></td>
                <td>{{ $orderitem->quantity }}</td>
                <td>{{ $orderitem->price }} AZN</td>
                <td>{{ $orderitem->amount }} AZN</td>
            </tr>

            @endforeach

        </tbody>
    </table>
 
    <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
                        <tbody>
                        <tr>
              <td class="text-right"><strong>Məbləğ:</strong></td>
              <td class="text-right">{{ $orderitem->order->total }}</td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>

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