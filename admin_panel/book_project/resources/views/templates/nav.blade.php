@auth
<nav id="top">
    <div class="container">
      <div class="container-inner">	
          
          <div class="box box-right">
              <div><a href="{{ route('WishListList') }}" id="wishlist-total" title="İstək siyahısı"><i class="icons-left fas fa-heart"></i><span class="hidden-xs">İstək siyahısı ({{ $wishlists->count() }})</span></a></div>
              <div class="setting">
                  <div class="btn-group">
                      <button class="btn btn-link dropdown-toggle" title="My Account" data-toggle="dropdown"><i class="icons-left fas fa-user"></i><span class="hidden-xs">Hesabım</span><i class="icons-right fas fa-chevron-down"></i></button>
                      <div class="dropdown-menu">
                          <ul class="list-unstyled">
                          <li><a href="{{ route('Acount') }}">Hesabım</a></li>			
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="mt-2" style="width: 30px height: 35px !important; color:#fff;"><img src="{{ asset(Auth::user()->img) }}" alt="{{ Auth::user()->name }}" style="width:24px; height:24px;  border-radius: 50%;"> {{ Auth::user()->name }}</div>	
          </div>
          
      </div>
   </div>
  </nav>
@endauth