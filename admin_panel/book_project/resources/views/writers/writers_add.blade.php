@extends('layouts.master')
@section('title','Yazıçı Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Yazıçı Əlavə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('addWritersPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="writer_name">Ad Soyad</label>
                    <input type="text" class="form-control" id="writer_name" name="writer_name" />
                  </div>
                  <div class="form-group">
                    <label for="writer_about">Haqqında</label> <br />
                    <textarea class="form-control" name="writer_about" id="writer_about" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="writer_img">Şəkil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="writer_img" name="writer_img" />
                        <label class="custom-file-label" for="writer_img">Şəkil Seç</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-success">Təsdiq Et</button>
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