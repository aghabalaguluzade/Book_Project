@extends('templates.master')
@section('title','İstək Səhifəsi')
@section('content')
<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li><a href="{{ route('Acount') }}">Hesabım</a></li>
    <li>İstək Səhifəsi</li>
  </ul>
</div>
</div>

  <div id="checkout-cart" class="container">
  @include('templates.errors')
    <div class="row">
            <div id="content" class="col-sm-12">
  <h1>Səbət</h1>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td class="text-center">Şəkil</td>
            <td class="text-left">Məhsul Adı</td>
            <td class="text-right">Qiymət</td>
            <td>Əməliyyatlar</td>
          </tr>
        </thead>
        <tbody>

            @foreach ($wishlists as $wishlist)

        <tr>
                <td class="text-center">
                    <a href="{{ route('BooksProduct',$wishlist->books->slug) }}">
                        <img src="{{ asset($wishlist->books->books_img) }}" style="width: 110px; height:110px;" alt="{{ $wishlist->books->books_name }}" title="{{ $wishlist->books->books_name }}" class="img-thumbnail">
                      </a>
                  </td>
                <td class="text-left"><a href="{{ route('BooksProduct',$wishlist->books->slug) }}">{{ $wishlist->books->books_name }}</a></td>
                <td class="text-right">{{ $wishlist->books->price }} AZN</td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger" data-original-title="Sil" onclick="WishListDelete({{ $wishlist->id }})"><i class="fa fa-times-circle"></i></button>
                    </span>
                  </div>
              </td>
        </tr>

        @endforeach     

        </tbody>
      </table>
    </div>
    <div class="row">
  </div>
  </div>
</div>
</div>
@endsection
@section('addcss')
<style>

  .duyme {
    background-color: transparent;
    color: #000;
    border: 0.50px solid silver;
    padding: 10px;
    transition: 500ms;
  }
  .duyme:hover {
    color:#fff;
    background-color: #62AB00;
  }

</style>
@endsection
@section('addjs')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    const WishListDelete = (id) => {

        swal({
            title: "Diqqət!",
            text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
            icon: "warning",
            buttons: ["İmtina et", "Sil"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            location.href = `/istək-sil/${id}`;
            } else {
            swal("İmtina Edildi!");
            }
        });
}
</script>
@endsection