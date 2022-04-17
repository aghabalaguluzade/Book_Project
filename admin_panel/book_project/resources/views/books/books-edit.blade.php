@extends('layouts.master')
@section('title','Kitab Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kitab Redaktə Et</h3>
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
                      <label for="category_id">Kateqoriya</label>
                      <select class="form-control" id="category_id" name="category_id">
                        @foreach ($main_category as $category)
                            <optgroup label="{{ $category->category_name }}">
                              @foreach ($category->getSubCategory($category->id) as $sub_category)
                                  <option value="{{ $sub_category->id }}" {{ $sub_category->id == $books->category_id ? "selected" : "" }}>{{ $sub_category->category_name }}</option>
                              @endforeach
                            </optgroup>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="writer_id">Yazıçılar</label>
                      <select class="form-control" id="writer_id" name="writer_id">
                        @foreach ($writers as $writer)
                          <option value="{{ $writer->id }}" {{ $writer->id == $books->writer_id ? "selected" : "" }}>{{ $writer->writer_name }}</option>
                        @endforeach
                      </select>
                    </div>
                  <div class="form-group">
                    <label for="books_name">Kitab Adı</label>
                    <input type="text" class="form-control" id="books_name" name="books_name" value="{{ $books->books_name }}" />
                  </div>
                  <div class="form-group">
                    <label for="books_description">Kitabın Məzmunu</label> <br />
                    <textarea class="form-control" id="books_description" cols="30" rows="10" name="books_description">{{ $books->books_description }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="price">Kitab Qiyməti</label>
                    <input type="number" class="form-control" min="0" max="10000" step="0.01" id="price" name="price" value="{{ $books->price }}" />
                  </div>
                  <button type="button" class="btn btn-outline-info mb-3" id="btnView">Qiymət Tənzimləmələri</button>
                  <div class="jumbotron jumbotron-fluid" id="priceView" style="display:none; text-align:center">
                    <div class="container">
                      <h2>Hazırda olan qiymət</h2>
                      <h3 class="display-6 old-price">{{ $books->price }}</h3>
                      <div class="form-group">
                        <h2>Köhnə Qiymət</h2>
                        <p>{{ $books->old_price }}</p>
                        <label for="prince_cut">Endirim</label>
                        <input type="number" class="form-control" min="0" max="100" name="price_cut" id="price_cut" value="{{ $books->price_cut }}" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="page">Kitabın Səhifə</label>
                    <input type="number" class="form-control" min="1" max="4000" id="page" name="page" value="{{ $books->page }}" />
                  </div>
                  <div class="form-group">
                    <label for="quantity">Kitabın Sayı</label>
                    <input type="number" class="form-control" min="1" max="100000" id="quantity" name="quantity" value="{{ $books->quantity }}" />
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
<style>

  .old-price {
    text-decoration: line-through;
  }

</style>
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
  {{-- <script src="{{ asset('plugins/main/books-edit.js') }}"></script> --}}
  <script>
    $( "#btnView" ).click(function() {
    $( "#priceView" ).toggle();
  });
  </script>
@endsection