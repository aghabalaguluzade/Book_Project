@extends('layouts.master')
@section('title','Suallar Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Suallar Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Başlıq</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Cavab</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody>

            @foreach ($questions as $question)
            
            <tr class="odd">
                <td>{{ $question->question_title }}</td>
                <td>{{ $question->question_answer }}</td>
                <td>
                    <button class="btn btn-outline-danger btn-sm" onclick="questionsDelete({{ $question->id }})"><i class="fas fa-trash"></i></button>
                    <a href="{{ route("editQuestionsIndex", $question->id) }}"><button class="btn btn-outline-info btn-sm">Redaktə Et</button></a>
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
  <script src="{{ asset('plugins/main/questions_edit.js') }}"></script>
@endsection