@extends('templates.master')
@section('title','Giriş')
@section('content')

  <div class="container">
      <div class="inner">
          <ul class="breadcrumb">
              <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
              <li>Giriş</li>
          </ul>
      </div>
  </div>

<div id="account-login" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
    <div class="row">
      <div class="col-sm-6">
        <div class="well">
          <h2>Yeni müştəri</h2>
          <p><strong>Qeydiyyatdan keçin</strong></p>
          <p>Hesab yaratmaqla siz daha sürətli alış-veriş edə, sifarişin statusundan xəbərdar ola və əvvəllər etdiyiniz sifarişləri izləyə biləcəksiniz.</p>
          <a href="{{ route('RegisterIndex') }}" class="btn btn-primary">Qeydiyyat</a></div>
      </div>
      <div class="col-sm-6">
        <div class="well">
          <h2>Geri dönən Müştəri</h2>
          <p><strong>Mən geri qayıdan müştəriyəm</strong></p>
          @include('templates.errors')
          <form action="{{ route('LoginUserController') }}" method="POST">
            @csrf
            <div class="form-group">
              <label class="control-label" for="input-email">E-poçt</label>
              <input type="email" name="email" placeholder="E-poçtunuzu daxil edin..." id="input-email" class="form-control" required="required" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-password">Şifrəniz</label>
              <input type="password" name="password" placeholder="Şifrənizi daxil edin..." id="input-password" class="form-control" required="required" />
              <a href="">Şifrəmi unutdum...</a></div>
              <button class="btn btn-primary">Giriş et</button>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection