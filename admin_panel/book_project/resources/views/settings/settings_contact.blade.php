@extends('layouts.master')
@section('title','Əlaqə Nizamlamaları')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Əlaqə Nizamlamaları</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('contactUpdate') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="contact_address">Ünvan</label>
                    <input type="text" class="form-control" id="contact_address" name="contact_address" required="required" value="{{ $data->contact_address }}" />
                  </div>
                  <div class="form-group">
                    <label for="contact_address">Xəritə</label>
                    <input type="text" class="form-control" id="map_name" name="map_name" value="{{ $data->map_name }}" />
                  </div>
                  <div class="form-group">
                    <label for="contact_email">Email</label>
                    <input type="text" class="form-control" id="contact_email" name="contact_email" required="required" value="{{ $data->contact_email }}" />
                  </div>
                  <div class="form-group">
                    <label for="contact_phone">Əlaqə nömrəsi</label>
                    <input type="text" class="form-control" id="contact_phone" name="contact_phone" required="required" value="{{ $data->contact_phone }}" />
                  </div>
                  <div class="form-group">
                    <label for="about_us">Haqqımızda</label> <br />
                    <textarea class="form-control" id="about_us" cols="30" rows="10" name="about_us"></textarea>
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
<script>
  tinymce.init({
    selector: '#about_us',
    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
  });
</script>
@endsection