@extends('templates.master')
@section('title',Auth::user()->name.' hesabını redaktə et')
@section('content')

<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li><a href="{{ route('Acount') }}">Hesabım</a></li>
    <li>Hesab məlumatlarınızı redaktə edin</li>
  </ul>
</div>

<div id="account-edit" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Hesabım Məlumatım</h1>
      @include('templates.errors')
      <form action="{{ route('EditAcountPost') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <fieldset>
          <legend>Şəxsi Məlumatlarınız</legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="img">Cari Şəkil</label>
            <img src="{{ asset(Auth::user()->img) }}" alt="{{ Auth::user()->name }}" style="width:100px; height:auto" />
          <div class="input-group col-sm-10">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="img" name="img" style="width: 100% !important" />
              <label class="custom-file-label" for="img" style="width: 100% !important">Şəkil Seç</label>
            </div>
          </div>
        </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname">Soyad Ad</label>
            <div class="col-sm-10">
              <input type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Soyad ve Adınızı daxil edin..." id="input-firstname" class="form-control">
              <!-- Error First Name -->
              <div class="for-error error-firstname"></div>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">E-poçt</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder="E-poçtunuzu daxil edin..." id="input-email" class="form-control">
             <!-- Error First Name -->
             <div class="for-error error-firstname"></div>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email">Şifrəniz</label>
            <div class="col-sm-10">
              <input type="password" name="password" value="{{ Auth::user()->password }}" placeholder="Şifrənizi daxil edin..." id="input-email" class="form-control">
             <!-- Error First Name -->
             <div class="for-error error-firstname"></div>
            </div>
          </div>
        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="{{ route('Acount') }}" class="btn btn-default">Geri</a></div>
          <div class="pull-right">
            <input type="submit" value="Redaktə et" class="btn btn-primary" />
          </div>
        </div>
      </form>
      </div>
    </div>
</div>
@endsection