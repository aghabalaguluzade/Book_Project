@extends('layouts.master')
@section('title','istifadəçilərin Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">istifadəçilərin Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Şəkil</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Adı</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">E-poçt</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Rol</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody class="text-center">

            @foreach ($users as $user)
            
            <tr class="odd text-center">
                <td><img src="{{ asset($user->img) }}" alt="{{ $user->name }}" style="width: 50px; height: auto;"></td>
                <td class="text-center">{{ $user->name }}</td>
                <td class="text-center">{{ $user->email }}</td>
                <td class="text-center">
                  @foreach ($user->roles as $role)
                      {{ $role->name }}
                  @endforeach
                </td>
                <td>
                    <button class="btn btn-outline-danger btn-sm mb-1-md">Sil</button>
                    <a href="{{ route('UsersEditIndex',$user->id) }}"><button class="btn btn-outline-info btn-sm">Redaktə Et</button></a>
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
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
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
@endsection