@extends('layouts.master')
@section('title','Xüsusiyyət Bölməsi Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Xüsusiyyət Bölməsi Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('FeatureSectionAddPost') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="feature_title">Başlıq</label>
                    <input type="text" class="form-control" id="feature_title" name="feature_title" />
                  </div>
                  <div class="form-group">
                    <label for="feature_content">Açıqlama</label> <br />
                    <input type="text" class="form-control" id="feature_content" name="feature_content" />
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