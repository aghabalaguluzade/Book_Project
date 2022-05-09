@extends('templates.master')
@section('title','Sifariş')
@section('content')

<div class="container">
    <div class="inner">
      <ul class="breadcrumb">
      <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
      <li><a href="{{ route('ShopCartList') }}">Səbət</a></li>
      <li>Sifarişi Rəsmiləşdirmək</li>
    </ul>
  </div>
  @include('templates.errors')
  <h2>Sifariş (Məbləğ: {{ $total }})</h2>
  <p>İstifadə etmək istədiyiniz endirim kodunuz və ya çatdırılma ünvanınızı seçin.</p>
  <form action="{{ route('OrderPost') }}" method="POST">
    @csrf
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
  <div class="panel-heading">
  <h4 class="panel-title">
    <a href="#collapse-coupon" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Kupon kodundan istifadə edin <i class="fa fa-caret-down"></i>
    </a>
  </h4>
  </div>
  <div id="collapse-coupon" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
  <div class="panel-body">
    <label class="col-sm-2 control-label" for="input-coupon">Endirim Kuponunuzu daxil edin</label>
    <div class="input-group">
      <input type="text" name="coupon" value="" placeholder="Endirim Kuponunuzu daxil edin" id="input-coupon" class="form-control">
      <span class="input-group-btn">
      <input type="button" value="Kuponu tətbiq edin" id="button-coupon" data-loading-text="Yüklənir..." class="btn btn-primary" />
      </span>
    </div>
  </div>
  </div>
  </div>
  <div class="panel panel-default">
  <div class="panel-heading">
  <h4 class="panel-title"><a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Çatdırılma Məlumatları <i class="fa fa-caret-down"></i></a></h4>
  </div>
  <div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
  <div class="panel-body">
    <div class="form-horizontal">
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="name">Soyad Ad</label>
        <div class="col-sm-10">
          <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Soyad Ad" id="name" class="form-control" />
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="email">E-poçt</label>
        <div class="col-sm-10">
          <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="E-poçt" id="email" class="form-control" />
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="address">Ünvan</label>
        <div class="col-sm-10">
          <input type="text" name="address" value="{{ Auth::user()->address }}" placeholder="Poçt kodu" id="address" class="form-control" />
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="postcode">Poçt kodu</label>
        <div class="col-sm-10">
          <input type="text" name="postcode" value="{{ Auth::user()->post_code }}" placeholder="Poçt kodu" id="postcode" class="form-control" />
        </div>
      </div>
      <div class="form-group required">
        <label class="col-sm-2 control-label" for="phone">Telefon</label>
        <div class="col-sm-10">
          <input type="tel" name="phone" value="{{ Auth::user()->phone }}" placeholder="Telefon" id="phone" class="form-control" />
        </div>
      </div>
      <input type="hidden" name="total" value="{{ $total }}" />
    </div>
  </div>
  </div>
  </div>
       </div>
   <br>
   <div class="card-footer" style="float: right">
    <button type="submit" class="btn btn-success btn-outline">Sifariş Et</button>
  </div>
  </form>
</div>
@endsection
@section('addcss')
  <style>
    .btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
}

.btn-primary.btn-outline {
    color: #428bca;
}

.btn-success.btn-outline {
    color: #5cb85c;
}

.btn-info.btn-outline {
    color: #5bc0de;
}

.btn-warning.btn-outline {
    color: #f0ad4e;
}

.btn-danger.btn-outline {
    color: #d9534f;
}

.btn-primary.btn-outline:hover,
.btn-success.btn-outline:hover,
.btn-info.btn-outline:hover,
.btn-warning.btn-outline:hover,
.btn-danger.btn-outline:hover {
    color: #fff;
}
  </style>   
@endsection