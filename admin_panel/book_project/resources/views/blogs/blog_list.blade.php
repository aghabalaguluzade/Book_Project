@extends('layouts.master')
@section('title','Bloq Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Bloq Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Şəkil</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Başlıq</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Yazıcı</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody>

            @foreach ($blogs as $blog)
            
            <tr class="odd">
                <td><img src="{{ asset( $blog->img) }}" alt="{{ $blog->img }}" style="width: 100px; height: auto;"></td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->author }}</td>
                <td>
                    @if($blog->status == "1")
                        <span class="badge badge-success">Aktiv</span>
                    @else 
                        <span class="badge badge-danger">Deaktiv</span>
                    @endif
                </td>
                <td>
                    <button class="btn btn-outline-danger btn-sm" onclick="blog_delete({{ $blog->id }})">Sil</button>
                    <button class="btn btn-outline-info btn-sm" onclick="blog_view({{ $blog->id }}, '{{ asset('') }}')">Bax</button>
                    <a href="{{ route('BlogEditIndex', $blog->id) }}"><button class="btn btn-outline-info btn-sm">Redaktə Et</button></a>
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

  <div class="modal fade" id="blog_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bloq</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table class="table table-responsive-sm">
              <tbody>
                <tr>
                  <th>Şəkil</th>
                  <td id="img"></td>
                </tr>
                <tr>
                  <th>Başlıq</th>
                  <td id="title"></td>
                </tr>
                <tr>
                  <th>Yazıcı</th>
                  <td id="author"></td>
                </tr>
                <tr>
                  <th>Status</th>
                  <td id="status"></td>
                </tr>
                <tr>
                  <th>Əlavə Edilmə Tarixi </th>
                  <td id="created_at"></td>
                </tr>
                <tr>
                  <th>Məzmun</th>
                  <td id="contents"></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
        </div>
      </div>
    </div>
  </div>


@endsection
@section('head')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<style>

</style>
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
  <script src="{{ asset('plugins/main/blog_list.js') }}"></script>
  <script>
    tinymce.init({
      selector: '#edit_contents',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
@endsection