@extends('templates.master')
@section('title',Auth::user()->name.' hesabını redaktə et')
@section('content')

<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li><a href="{{ route('Acount') }}">Hesabım</a></li>
    <li>Sifarişlərim</li>
  </ul>
</div>

<div id="account-edit" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Sifarişlərim</h1>
      @include('templates.errors')
    
      </div>
    </div>
</div>
@endsection