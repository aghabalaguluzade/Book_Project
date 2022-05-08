@extends('layouts.master')
@section('title','Kitab Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kitab Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('UsersEditPost', $users->id) }}" method="POST" enctype="multipart/form-data">
                {{-- <input type="hidden" id="id" name="id" value="{{ $users->id }}" /> --}}
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="img">Şəkil</label> <br />
                        <img src="{{ asset($users->img) }}" alt="{{ asset($users->img) }}" style="width: 100px; height: auto;" class="mb-3"/>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="img" name="img" />
                          <label class="custom-file-label" for="img">Dəyişmək üçün şəkil seç</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Soyad Ad</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $users->name }}" />
                      </div>
                      <div class="form-group">
                        <label for="email">E-poçt</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}" />
                      </div>
                      <div class="form-group">
                        <label for="role_id">Rollar</label>
                        <select class="form-control" id="role_id" name="role_id">
                          @foreach ($roles as $role)
                              <option value="{{ $role->id }}">{{ $role->name }}</option>
                          @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="category_id">Rolu</label>
                            @foreach ($users->roles as $user)
                            {{-- <p class="alert alert-info">{{ $user->name }} <i class="fas fa-times" style="float:right" onclick="rolesDelete({{ $users->id  }}, '{{ $user->id }}')"></i></p>   --}}
                            <p class="alert alert-info">{{ $user->name }} <a href="{{ route('UsersDelete',['user_id'=>$users->id, 'role_id'=>$user->id]) }}"><i class="fas fa-times" style="float:right"></i></a></p>   
                            @endforeach
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
@section('footer')
  <script>
    $( "#btnView" ).click(function() {
    $( "#priceView" ).toggle();
  });
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{ asset('plugins/main/user_delete.js') }}"></script>
@endsection