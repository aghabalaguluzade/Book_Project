@extends('templates.master')
@section('title','Mənim Sifarişim')
@section('content')
<div class="container">
  <div class="inner">
    <ul class="breadcrumb">
    <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
    <li>Səbət</li>
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
            <td class="text-left">Miqdar</td>
            <td class="text-right">Qiymət</td>
            <td class="text-right">Məbləğ</td>
          </tr>
        </thead>
        <tbody>
        
            @php
                $total = 0;
            @endphp

            @foreach ($cards as $card)

        <tr>
                <td class="text-center">
                    <a href="{{ route('BooksProduct',$card->books->slug) }}">
                        <img src="{{ asset($card->books->books_img) }}" style="width: 110px; height:110px;" alt="{{ $card->books->books_name }}" title="{{ $card->books->books_name }}" class="img-thumbnail">
                      </a>
                  </td>
                <td class="text-left"><a href="{{ route('BooksProduct',$card->books->slug) }}">{{ $card->books->books_name }}</a></td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="text" name="quantity" value="{{ $card->quantity }}" size="1" class="form-control" />
                    <span class="input-group-btn">
                    <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                    <button type="submit" class="btn btn-danger" data-original-title="Sil" onclick="ShopCartDelete({{ $card->id }})"><i class="fa fa-times-circle"></i></button>
                    </span>
                  </div>
              </td>
                <td class="text-right">{{ $card->books->price }} AZN</td>
                <td class="text-right">{{ $card->books->price * $card->quantity }} AZN</td>
        </tr>

        @php
        $total += $card->books->price * $card->quantity;   
        @endphp

        @endforeach     

        </tbody>
      </table>
    </div>
    <div class="row">
    <div class="col-sm-4 col-sm-offset-8">
      <table class="table table-bordered">
                    <tbody>
                    <tr>
          <td class="text-right"><strong>Məbləğ:</strong></td>
          <td class="text-right">{{ $total }}</td>
        </tr>
      </tbody>
      </table>
    </div>
  </div>
      <div class="buttons clearfix">
        <form action="{{ route('OrderIndex') }}" method="POST">
          @csrf
          <input type="hidden" name="total" value="{{ $total }}" />
        <div class="pull-left"><a href="" class="btn btn-default">Continue Shopping</a></div>
        <div class="pull-right"><button type="submit" class="btn btn-outline duyme">Sifariş</button></div>
        </form>
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
    const ShopCartDelete = (id) => {

        swal({
            title: "Diqqət!",
            text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
            icon: "warning",
            buttons: ["İmtina et", "Sil"],
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            location.href = `/səbət-sil/${id}`;
            } else {
            swal("İmtina Edildi!");
            }
        });
}
</script>
@endsection