@extends('layouts.master')
@section('title','Kateqoriya Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kateqoriya Əlavə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('CategoryAddPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Kateqoriya</label>
                    <select class="form-control" id="category" name="parent_id">
                      <option value="0" selected="selected">Üst Kateqoriya</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="category-add">Kateqoriya Əlavə Et</label>
                      <input type="text" id="category-add" class="form-control" name="category_name" />
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