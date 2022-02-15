@extends('layouts.master')
@section('title','Logo Nizamlamaları')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Logo Nizamlamaları</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('logoUpdate') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <table class="table table-reponsive-sm">
                    <tr>
                      <td><img src="{{ asset($data->logo) }}" style="width: 100px; height: auto;"></td>
                      <td>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="logo" />
                              <label class="custom-file-label" for="exampleInputFile">Şəkil Seç</label>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="{{ asset($data->favicon) }}" style="width:50px; height: auto"></td>
                      <td colspan="2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" name="favicon" />
                              <label class="custom-file-label" for="exampleInputFile">İcon Seç</label>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </table>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Təsdiq Et</button>
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