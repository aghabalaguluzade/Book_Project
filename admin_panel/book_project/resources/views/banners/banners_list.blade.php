@extends('layouts.master')
@section('title','Banner Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Banner Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Şəkil</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ad</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Başlıq</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Link</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody>

            @foreach ($banners as $banner)
            
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0"><img src="{{ asset($banner->banner_img) }}" alt="{{ $banner->banner_img }}" style="width: 200px; height: auto;" ></td>
                <td>{{ $banner->banner_name }}</td>
                <td>{{ $banner->banner_title }}</td>
                <td><a href="{{ $banner->banner_link }}" target="_blank">Keçid üçün click edin!</a></td>
                <td>
                    <button class="btn btn-outline-info btn-sm" onclick="banner_edit({{ $banner->id }}, '{{ asset('') }}')">Redaktə Et</button>
                </td>
              </tr>
              
            @endforeach
    </tbody>
      </table>
    </div>
</div>
</div>
    </div>
  </div>


  <div class="modal fade" id="banner_modal_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bloq Redaktə Et</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('BannerEdit') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="" id="banner_id" />
            @csrf
            <table class="table table-responsive-sm">
              <tbody>
                <tr>
                  <th>Şəkil</th>
                  <td id="banner_img"></td>
                </tr>
                <tr>
                  <th>Şəkili dəyişmək üçün seçin</th>
                  <td>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="banner_img" name="banner_img" />
                      <label class="custom-file-label" for="banner_img">Şəkil Seç</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th>Ad</th>
                  <td>
                    <input type="text" class="form-control"  id="banner_name" name="banner_name" />
                  </td>
                </tr>
                <tr>
                  <th>Başlıq</th>
                  <td>
                    <input type="text" class="form-control"  id="banner_titl" name="banner_title" />
                  </td>
                </tr>
                <tr>
                  <th>Məzmun</th>
                  <td>
                    <textarea class="form-control edit_contents" name="banner_content" id="banner_content" cols="30" rows="10"></textarea>
                  </td>
                </tr>
                <tr>
                  <th>Link</th>
                  <td>
                    <input type="url" class="form-control" id="banner_link" name="banner_link" />
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="modal-footer">
              <button class="btn btn-info">Redaktə Et</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('head')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('footer')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": []
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script src="{{ asset('plugins/main/banners_edit.js') }}"></script>
@endsection