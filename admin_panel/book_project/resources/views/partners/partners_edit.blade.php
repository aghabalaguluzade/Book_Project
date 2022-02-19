@extends('layouts.master')
@section('title','Tərəfdaş Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tərəfdaş Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('editPartnersPost',$data->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $data->id }}" />  
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="img">Cari Şəkil</label> <br />
                        <img src="{{ asset($data->img) }}" alt="{{ asset($data->img) }}" style="width: 250px; height: auto;" />
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ $data->status == 1 ? "selected" : "" }}>Aktiv</option>
                            <option value="0" {{ $data->status == 0 ? "selected" : "" }}>Deaktiv</option>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="title">Ad</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" />
                  </div>
                  <div class="form-group">
                    <label for="url">Url</label>
                    <input type="url" class="form-control" id="url" name="url" value="{{ $data->url }}" />
                  </div>
                  <div class="form-group">
                    <label for="img">Şəkil</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="img" name="img" />
                      <label class="custom-file-label" for="img">Şəkil Seç</label>
                    </div>
                  </div>
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