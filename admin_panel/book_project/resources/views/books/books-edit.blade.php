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
              <form action="{{ route('BooksEditPost', $books->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="{{ $books->id }}" />
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="img">Şəkil</label> <br />
                        <img src="{{ asset($books->books_img) }}" alt="{{ asset($books->books_img) }}" style="width: 100px; height: auto;" class="mb-3"/>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="books_img" name="books_img" />
                          <label class="custom-file-label" for="books_img">Dəyişmək üçün şəkil seç</label>
                        </div>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="books_name">Kitab Adı</label>
                    <input type="text" class="form-control" id="books_name" name="books_name" value="{{ $books->books_name }}" />
                  </div>
                  <div class="form-group">
                    <label for="books_description">Məzmun</label> <br />
                    <textarea class="form-control" id="books_description" cols="30" rows="10" name="books_description">{{ $books->books_description }}</textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Redaktə Et</button>
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