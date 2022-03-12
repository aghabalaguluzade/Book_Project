@extends('layouts.master')
@section('title','Kateqoriya Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Kateqoriya Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Kateqoriya</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Üst Kateqoriya</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody>

            @foreach ($categories as $key=>$category)
            
            <tr class="odd">
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->ParentId($category->parent_id) }}</td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" onchange="status({{ $category->id }})" class="custom-control-input" id="customSwitch3{{ $key }}" {{ $category->status == 1 ? "checked" : "" }} />
                      <label class="custom-control-label" for="customSwitch3{{ $key }}"></label>
                    </div>
                  </div>
                </td>
                <td>
                    <button class="btn btn-outline-danger btn-sm" onclick="blog_delete({{ $category->id }})">Sil</button>
                    <button class="btn btn-outline-info btn-sm">Redaktə Et</button>
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


@endsection
@section('head')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
<style>

  .note-editable {
    height: 300px;
  }

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
  <script src="{{ asset('plugins/main/category_list.js') }}"></script>
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    $('.edit_contents').summernote()
  })
</script>
@endsection