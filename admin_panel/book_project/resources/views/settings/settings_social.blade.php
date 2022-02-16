@extends('layouts.master')
@section('title','Sosial Şəbəkə Nizamlamaları')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sosial Şəbəkə Nizamlamaları</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('socialUpdate') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="social_instagram">İnstagram</label>
                    <input type="url" class="form-control" id="social_instagram" name="social_instagram" required="required" value="{{ $data->social_instagram }}" />
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Təsdiq Et</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>


@endsection
@section('head')
@endsection
@section('footer')
@endsection