@extends('layouts.master')
@section('title','Bloq Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bloq Əlavə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('BlogAddPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Başlıq</label>
                    <input type="text" class="form-control" id="title" name="title" />
                  </div>
                  <div class="form-group">
                    <label for="author">Yazıcı</label>
                    <input type="text" class="form-control" id="author" name="author" />
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
                  <div class="form-group">
                    <label for="contents">Məzmun</label> <br />
                    <textarea class="form-control" name="contents" id="contents" cols="30" rows="10" name="contents"></textarea>
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
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('footer')
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    $('#contents').summernote()
  })
</script>
@endsection