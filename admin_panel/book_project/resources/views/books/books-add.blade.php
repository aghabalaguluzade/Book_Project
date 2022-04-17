@extends('layouts.master')
@section('title','Kitablar Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kitablar Əlavə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('BooksAddPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category_id">Kateqoriya</label>
                    <select class="form-control" id="category_id" name="category_id">
                      @foreach ($main_category as $category)
                          <optgroup label="{{ $category->category_name }}">
                            @foreach ($category->getSubCategory($category->id) as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}</option>
                            @endforeach
                          </optgroup>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="writer_id">Yazıçılar</label>
                    <select class="form-control" id="writer_id" name="writer_id">
                      @foreach ($writers as $writer)
                        <option value="{{ $writer->id }}">{{ $writer->writer_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="books_name">Kitab Adı</label>
                    <input type="text" class="form-control" id="books_name" name="books_name" />
                  </div>
                  <div class="form-group">
                    <label for="books_description">Kitab Haqqında</label> <br />
                    <textarea class="form-control" name="books_description" id="books_description" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="books_img">Kitab Şəkili</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="books_img" name="books_img" />
                      <label class="custom-file-label" for="books_img">Şəkil Seç</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="price">Kitab Qiyməti</label>
                  <input type="number" class="form-control" min="0" max="10000" step="0.01" id="price" name="price" />
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