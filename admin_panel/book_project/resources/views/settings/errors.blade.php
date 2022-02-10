@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session("success"))
    <div class="alert alert-success">
        <p>Əməliyyat Uğurla İcra Edildi!</p>
    </div>
@endif

@if (session("error"))
    <div class="alert alert-danger">
        <p>Əməliyyat !</p>
    </div>
@endif