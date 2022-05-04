@extends('layouts.master')
@section('title','Rol Əlavə Et')
@section('content')
@include('widget.breadcrumb')

    
<section class="content">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Rol Əlavə Et</h3>
            </div>
            @include('settings.errors')
            <form action="{{ route('RolesAddPost') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Rolun Adı</label>
                  <input type="text" class="form-control" id="name" name="name" />
                </div>
                <div class="form-group">
                  <label for="description">Açıqlama</label>
                  <input type="text" class="form-control" id="description" name="description" />
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