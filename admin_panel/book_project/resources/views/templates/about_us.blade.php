@extends('templates.master')
@section('title','Haqqımızda')
@section('content')
<div id="information-information" class="container">
  
    <div class="row">
        <div class="col-order">
                  <div id="content" class="col-sm-12">
        <h2>Haqqımızda</h2>
        @foreach ($settings as $setting)
            <div>
                {!! $setting->about_us !!}
            </div>
        @endforeach
        </div>
      </div></div>
  </div>
@endsection