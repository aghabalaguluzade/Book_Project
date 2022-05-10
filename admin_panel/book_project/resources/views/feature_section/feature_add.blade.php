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
                    <label for="feature_title1">Başlıq1</label>
                    <input type="text" class="form-control" id="feature_title1" name="feature_title1" value="" />
                    <label for="feature_content1">Açıqlama1</label> <br />
                    <input type="text" class="form-control" id="feature_content1" name="feature_content1" />
                  </div>
                  <div class="form-group">
                    <label for="feature_title2">Başlıq2</label>
                    <input type="text" class="form-control" id="feature_title2" name="feature_title2" />
                    <label for="feature_content2">Açıqlama2</label> <br />
                    <input type="text" class="form-control" id="feature_content2" name="feature_content2" />
                  </div>
                  <div class="form-group">
                    <label for="feature_title3">Başlıq3</label>
                    <input type="text" class="form-control" id="feature_title3" name="feature_title3" />
                    <label for="feature_content3">Açıqlama3</label> <br />
                    <input type="text" class="form-control" id="feature_content3" name="feature_content3" />
                  </div>
                  <div class="form-group">
                    <label for="feature_title4">Başlıq4</label>
                    <input type="text" class="form-control" id="feature_title4" name="feature_title4" />
                    <label for="feature_content4">Açıqlama4</label> <br />
                    <input type="text" class="form-control" id="feature_content4" name="feature_content4" />
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