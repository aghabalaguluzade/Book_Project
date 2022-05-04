@extends('templates.master')
@section('title','Qeydiyyat')
@section('content')

    <div class="container">
        <div class="inner">
            <ul class="breadcrumb">
                <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
                <li>Qeydiyyat</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="register-form-content">
            <h1>Hesabı Qeydiyyatdan keçirin</h1>
            <p>Əgər artıq hesabınız varsa, bu ünvana daxil olun <a onclick="ocajaxlogin.appendLoginForm()" href="javascript:void(0);">giriş</a>.</p>
            @include('templates.errors')
            <form action="{{ route('RegisteredUserController') }}" method="POST" id="ajax-register-form" enctype="multipart/form-data" class="form-horizontal">
            @csrf
                <fieldset id="account">
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-firstname">Soyad Ad</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" placeholder="Soyad ve Adınızı daxil edin..." id="input-firstname" class="form-control" />
                        <!-- Error First Name -->
                        <div class="for-error error-firstname"></div>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-register-email">E-poçt</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" placeholder="E-poçtunuzu daxil edin..." id="input-register-email" class="form-control" />
                        <!-- Error Email -->
                        <div class="for-error error-email"></div>
                    </div>
                </div>
            </fieldset>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-register-password">Şifrəniz</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" placeholder="Şifrənizi daxil edin..." id="input-register-password" class="form-control" />
                        <!-- Error Password -->
                        <div class="for-error error-password"></div>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-confirm">Təsdiq Şifrəniz</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" placeholder="Təsdiq Şifrənizi daxil edin..." id="input-confirm" class="form-control" />
                        <!-- Error Confirm Password -->
                        <div class="for-error error-confirm"></div>
                    </div>
                </div>
                <div class="form-group required">
                    <label class="col-sm-2 control-label" for="img">Şəkil</label>
                  <div class="input-group col-sm-10">
                    <div class="custom-file" style="width: 100% !important">
                      <input type="file" class="custom-file-input" id="img" name="img" style="width: 100% !important" />
                      <label class="custom-file-label" for="img" style="width: 100% !important">Şəkil Seç</label>
                    </div>
                  </div>
                </div>
                <div class="buttons">
                <div class="pull-right">
                    <button type="submit" class="button"><span>Qeydiyyatdan Keç</span></button>
                </div>
            </div>
                    </form>
            </div>
    </div>
@endsection