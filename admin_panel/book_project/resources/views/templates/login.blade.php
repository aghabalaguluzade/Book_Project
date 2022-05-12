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

  @php
    if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_password'])) {
      $login_email = $_COOKIE['login_email'];
      $login_password = $_COOKIE['login_password'];
      $remember = "checked='checked'";
    }else {
      $login_email = "";
      $login_password = "";
      $remember = "";
    }
  @endphp

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
              <input type="email" name="email" placeholder="E-poçtunuzu daxil edin..." id="input-email" class="form-control" required="required" value="{{ $login_email }}" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-password">Şifrəniz</label>
              <input type="password" name="password" placeholder="Şifrənizi daxil edin..." id="input-password" class="form-control" required="required" value="{{ $login_password }}" />
            </div>
            <div class="form-group">
              <input type="checkbox" id="remember_token" name="remember_token" class="mr-2" {{ $remember }} />
              <label for="remember_token">Məni xatırla</label>
            </div>
              <button class="btn btn-success">Giriş et</button>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection