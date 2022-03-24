@extends('layouts.master')
@section('title','Yazıçı Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Yazıçı Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Şəkil</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ad Soyad</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Haqqında</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Status</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody>

            @foreach ($writers as $writer)
            
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0"><img src="{{ asset($writer->writer_img) }}" alt="{{ $writer->writer_img }}" style="width: 90px; height: auto;" ></td>
                <td>{{ $writer->writer_name }}</td>
                <td><button class="btn btn-outline-info btn-sm" onclick="writers_view({{ $writer->id }})">Bax</button></td>
                <td>
                    @if($writer->writer_status == "1")
                        <span class="badge badge-success">Aktiv</span>
                    @else 
                        <span class="badge badge-danger">Deaktiv</span>
                    @endif
                </td>
                <td>
                    <button class="btn btn-outline-danger btn-sm" onclick="writers_delete({{ $writer->id }})">Sil</button>
                    <button class="btn btn-outline-info btn-sm" onclick="writers_edit({{ $writer->id }}, '{{ asset('') }}')">Redaktə Et</button>
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


  {{-- Writers View (BAX) Modal --}}

  <div class="modal fade" id="writersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yazıçı Haqqında</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-responsive-sm">
              <tbody>
                <tr>
                  <th>Haqqında</th>
                  <td id="writer_about"></td>
                </tr>
                <tr>
                  <th>Əlavə Edilmə Tarixi</th>
                  <td id="created_at"></td>
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


  {{-- Yazıçı Edit --}}

  <div class="modal fade" id="writersEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yazıçı Redaktə Et</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('editWriters') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" />
            @csrf
            <table class="table table-responsive-sm">
                <tbody>
                  <tr>
                    <th>Şəkil</th>
                    <td id="writer_img"></td>
                  </tr>
                  <tr>
                    <th>Şəkili dəyişmək üçün seçin</th>
                    <td>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="writer_img" name="writer_img" />
                        <label class="custom-file-label" for="writer_img">Şəkil Seç</label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Ad Soyad</th>
                    <td>
                      <input type="text" class="form-control"  id="writer_name" name="writer_name" />
                    </td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td>
                      <select class="form-control" name="writer_status" id="writer_status">
                        <option value="1" >Aktiv</option>
                        <option value="0">Deaktiv</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <th>Haqqında</th>
                    <td>
                      <textarea class="form-control" name="writer_about" id="about" cols="30" rows="10"></textarea>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                <button class="btn btn-primary">Redaktə et</button>
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
  <script src="{{ asset('plugins/main/writers_list.js') }}"></script>
@endsection