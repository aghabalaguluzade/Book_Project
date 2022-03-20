@extends('layouts.master')
@section('title','Banner Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Banner Əlavə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('BannerAddPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="banner_name">Ad</label>
                    <input type="text" class="form-control" id="banner_name" name="banner_name" />
                  </div>
                  <div class="form-group">
                    <label for="banner_titl">Başlıq</label>
                    <input type="text" class="form-control" id="banner_titl" name="banner_title" />
                  </div>
                  <div class="form-group">
                    <label for="banner_content">Məzmun</label>
                      <textarea class="form-control" name="banner_content" id="banner_content" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="banner_link">Url</label>
                    <input type="url" class="form-control" id="banner_link" name="banner_link" />
                  </div>
                  <div class="form-group">
                      <label for="img">Şəkil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="banner_img" name="banner_img" />
                        <label class="custom-file-label" for="banner_img">Şəkil Seç</label>
                      </div>
                    </div>
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