@extends('layouts.master')
@section('title','Xüsusiyyətlər Bölməsi Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Xüsusiyyətlər Bölməsi Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('FeatureSectionEditPost', $features->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $features->id }}" />  
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="feature_title">Başlıq</label>
                      <input type="text" class="form-control" id="feature_title" name="feature_title" value="{{ $features->feature_title }}" />
                    </div>
                    <div class="form-group">
                      <label for="feature_content">Açıqlama</label> <br />
                      <input type="text" class="form-control" id="feature_content" name="feature_content" value="{{ $features->feature_content }}" />
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
@endsection