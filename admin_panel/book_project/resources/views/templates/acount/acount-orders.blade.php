@extends('templates.master')
@section('title',Auth::user()->name.' hesabını redaktə et')
@section('content')

<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li><a href="{{ route('Acount') }}">Hesabım</a></li>
    <li>Sifarişlərim</li>
  </ul>
</div>

<div id="account-edit" class="container">
    <div class="row">
    <div id="content" class="col-sm-12">
      <h1>Sifarişlərim</h1>
      @include('templates.errors')

      @extends('layouts.master')
@section('title','Kitablar Siyahısı')
@section('content')
@include('widget.breadcrumb')

<div class="card">
  @include('settings.errors')
    <div class="card-header">
      <h3 class="card-title">Kitablar Siyahısı</h3>
    </div>
    <div class="card-body">
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
<div class="row">
    <div class="col-sm-12 text-center">
        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
        <thead>
        <tr>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Şəkil</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Soyad Ad</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Telefon</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Ünvan</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Miqdar</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Qiyməti</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Sayı</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Səhifə Sayı</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Məhsul Kodu</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Əməliyyatlar</th></tr>
        </thead>
        <tbody class="text-center">

            @foreach ($books as $book)
            
            <tr class="odd text-center">
                <td><img src="" style="width: 50px; height: auto;"></td>
                <td></td>
                <td></td>
                <td class="text-center"></td>
                <td class="text-center"></td>
                <td> AZN</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-outline-danger btn-sm mb-1-md">Sil</button>
                    <a href=""><button class="btn btn-outline-info btn-sm">Redaktə Et</button></a>
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
    
      </div>
    </div>
</div>
@endsection