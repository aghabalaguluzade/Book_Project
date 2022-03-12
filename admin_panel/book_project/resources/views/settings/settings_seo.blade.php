@extends('layouts.master')
@section('title','Seo Nizamlamaları')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Seo Nizamlamaları</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('seoUpdate') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="seo_title">Sayt Başlığı (Title)</label>
                    <input type="text" class="form-control" id="seo_title" name="seo_title" required="required" value="{{ $settings[0]->seo_title }}" />
                  </div>
                  <div class="form-group">
                    <label for="seo_description">Sayt Açıqlaması (Description)</label>
                    <input type="text" class="form-control" id="seo_description" name="seo_description" required="required" value="{{ $settings[0]->seo_description }}" />
                  </div>
                  <div class="form-group">
                    <label for="seo_keywords">Sayt Açar Sözlər (Keywords)</label>
                    <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" required="required" value="{{ $settings[0]->seo_keywords }}" />
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Təsdiq Et</button>
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