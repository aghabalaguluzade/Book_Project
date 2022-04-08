@extends('layouts.master')
@section('title','Tərəfdaş Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    
<section class="content">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tərəfdaş Əlavə Et</h3>
            </div>
            @include('settings.errors')
            <form action="{{ route('addPartnersPost') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Ad</label>
                  <input type="text" class="form-control" id="title" name="title" />
                </div>
                <div class="form-group">
                  <label for="url">Url</label>
                  <input type="url" class="form-control" id="url" name="url" />
                </div>
                <div class="form-group">
                    <label for="img">Şəkil</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="img" name="img" />
                      <label class="custom-file-label" for="img">Şəkil Seç</label>
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