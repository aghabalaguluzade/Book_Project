@extends('templates.master')
@section('title','Hesabım')
@section('content')
<div id="account-account" class="container">
    <div class="row">
      <div id="content" class="col-sm-12">
      <h2>Hesabım</h2>
      <ul class="list-unstyled">
        <li><a href="{{ route('EditAcountIndex') }}">Hesab məlumatlarınızı redaktə edin</a></li>
        <li><a href="">İstək Siyahısı ()</a></li>
      </ul>
            <h2>Sifarişlərim</h2>
      <ul class="list-unstyled">
        <li><a href="{{ route('Orders') }}">Sifarişlərim</a></li>
      </ul>
      </div>
    </div>
</div>
@endsection