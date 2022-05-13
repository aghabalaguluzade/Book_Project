@extends('layouts.master')
@section('title','Bloq Redaktə Et')
@section('content')
@include('widget.breadcrumb')

    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bloq Redaktə Et</h3>
              </div>
              @include('settings.errors')
              <form action="{{ route('BlogEdit', $data->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}" />
                  @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="img">Şəkil</label> <br />
                        <img src="{{ asset($data->img) }}" alt="{{ asset($data->img) }}" style="width: 100px; height: auto;" class="mb-3"/>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="img" name="img" />
                          <label class="custom-file-label" for="img">Dəyişmək üçün şəkil seç</label>
                        </div>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="title">Başlıq</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}" />
                  </div>
                  <div class="form-group">
                    <label for="author">Yazıcı</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $data->author }}" />
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1" {{ $data->status == 1 ? "selected" : "" }}>Aktiv</option>
                        <option value="0" {{ $data->status == 0 ? "selected" : "" }}>Deaktiv</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="contents">Məzmun</label> <br />
                    <textarea class="form-control" id="contents" cols="30" rows="10" name="contents">{!! $data->contents !!}</textarea>
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
  var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  tinymce.init({
      selector: '#contents',
      plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
      imagetools_cors_hosts: ['picsum.photos'],
      menubar: 'file edit view insert format tools table help',
      toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
      toolbar_sticky: true,
      autosave_ask_before_unload: true,
      autosave_interval: '30s',
      autosave_prefix: '{path}{query}-{id}-',
      autosave_restore_when_empty: false,
      autosave_retention: '2m',
      image_advtab: true,
      link_list: [
          { title: 'My page 1', value: 'https://www.tiny.cloud' },
          { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_list: [
          { title: 'My page 1', value: 'https://www.tiny.cloud' },
          { title: 'My page 2', value: 'http://www.moxiecode.com' }
      ],
      image_class_list: [
          { title: 'None', value: '' },
          { title: 'Some class', value: 'class-name' }
      ],
      importcss_append: true,
      file_picker_callback: function (callback, value, meta) {
          /* Provide file and text for the link dialog */
          if (meta.filetype === 'file') {
              callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
          }

          /* Provide image and alt text for the image dialog */
          if (meta.filetype === 'image') {
              callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
          }

          /* Provide alternative source and posted for the media dialog */
          if (meta.filetype === 'media') {
              callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
          }
      },
      templates: [
          { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%" border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
          { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
          { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
      ],
      template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
      template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
      height: 600,
      image_caption: true,
      quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
      noneditable_noneditable_class: 'mceNonEditable',
      toolbar_mode: 'sliding',
      contextmenu: 'link image imagetools table',
      skin: useDarkMode ? 'oxide-dark' : 'oxide',
      content_css: useDarkMode ? 'dark' : 'default',
      content_style: 'body { font-family:Arial,Helvetica,sans-serif; font-size:14px }'
  });

</script>
@endsection