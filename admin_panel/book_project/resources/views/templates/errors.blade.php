@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session("success"))
    <div class="alert alert-success">
        <p>Əməliyyat Uğurla İcra Edildi!</p>
    </div>
@endif

@if (session('card-add'))
    <div class="alert alert-success">
        <p>Səbətə Əlavə Olundu</p>
    </div>
@endif

@if (session('card-delete'))
    <div class="alert alert-success">
        <p>Məhsul Səbətdən Silindi!</p>
    </div>
@endif

@if (session('card-add-error'))
    <div class="alert alert-danger">
        <p>Səbətə Əlavə Olunmadı</p>
    </div>
@endif

@if (session('login'))
    <div class="alert alert-danger">
        <p>Qeydiyyatdan Keç!</p>
    </div>
@endif

@if (session('order-success'))
    <div class="alert alert-success">
        <p>Məhsul Sifariş Edildi</p>
    </div>
@endif

@if (session('order-error'))
    <div class="alert alert-danger">
        <p>Məhsul Sifariş Verilmədi!</p>
    </div>
@endif

@if (session('order-not-stock'))
    <div class="alert alert-danger">
        <p>Bu Məhsuldan Yoxdur!</p>
    </div>
@endif

@if(session("error"))
    <div class="alert alert-danger">
        <p>Əməliyyat Uğurla İcra Edilmədi!</p>
    </div>
@endif

@if(session("not_found"))
    <div class="alert alert-danger">
        <p>Səhifə Tapılmadı!</p>
    </div>
@endif