@extends('layouts.master')
@section('title','Bloq Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bloq Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('BlogEdit', $data->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}" />
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="img">Şəkil</label> <br />
                        <img src="{{ asset($data->img) }}" alt="{{ asset($data->img) }}" style="width: 100px; height: auto;" class="mb-3"/>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="img" name="img" />
                          <label class="custom-file-label" for="img">Dəyişmək üçün şəkil seç</label>
                        </div>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="title">Başlıq</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" />
                  </div>
                  <div class="form-group">
                    <label for="author">Yazıcı</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $data->author }}" />
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $data->status == 1 ? "selected" : "" }}>Aktiv</option>
                        <option value="0" {{ $data->status == 0 ? "selected" : "" }}>Deaktiv</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="contents">Məzmun</label> <br />
                    <textarea class="form-control" id="contents" cols="30" rows="10" name="contents">{!! $data->contents !!}</textarea>
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
<script>
    tinymce.init({
      selector: '#contents',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
@endsection