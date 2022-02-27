@extends('layouts.master')
@section('title','Sualları Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sualları Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('editQuestionsPost', $data->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $data->id }}" />  
                @csrf
                <div class="card-body">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="question_title">Başlıq</label>
                      <input type="text" class="form-control" id="question_title" name="question_title" value="{{ $data->question_title }}" />
                    </div>
                    <div class="form-group">
                      <label for="question_answer">Sualın Cavabı</label> <br />
                      <textarea class="form-control" name="question_answer" id="question_answer" cols="30" rows="10" name="question_answer">{{ $data->question_answer }}</textarea>
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