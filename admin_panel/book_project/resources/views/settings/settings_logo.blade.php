@extends('layouts.master')
@section('title','Logo Nizamlamaları')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Logo Nizamlamaları</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('seoUpdate') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <table class="table table-reponsive-sm">
                    <tr>
                      <td></td>
                      <td colspan="2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" />
                              <label class="custom-file-label" for="exampleInputFile">Şəkil Seç</label>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td colspan="2">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile" />
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


@endsection
@section('head')
@endsection
@section('footer')
@endsection