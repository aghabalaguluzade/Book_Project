@auth
<nav id="top">
    <div class="container">
      <div class="container-inner">	
          
          <div class="box box-right">
              <div><a href="index6431.html?route=product/compare" id="link-compare" title="My Compare"><i class="icons-left fas fa-random"></i><span class="hidden-xs">My Compare</span></a></div>
              <div><a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="icons-left fas fa-heart"></i><span class="hidden-xs">Wish List (0)</span></a></div>
              <div class="setting">
                  <div class="btn-group">
                      <button class="btn btn-link dropdown-toggle" title="My Account" data-toggle="dropdown"><i class="icons-left fas fa-user"></i><span class="hidden-xs">My Account</span><i class="icons-right fas fa-chevron-down"></i></button>
                      <div class="dropdown-menu">
                          <ul class="list-unstyled">
                          <li><a href="{{ route('Acount') }}">Hesabım</a></li>
                          <li><a href="indexe223.html?route=account/order">Order History</a></li>
                          <li><a href="indexe223.html?route=account/transaction">Transactions</a></li>				
                          </ul>
                      </div>
                  </div>
              </div>
              <div><a href="index630e.html?route=checkout/checkout" title="Checkout"><i class="icons-left fas fa-share"></i><span class="hidden-xs">Checkout</span></a></div>
              {{-- <span class="alert alert-info" style="width: 30px height: 35px !important;">{{ Auth::user()->name }}</span>	 --}}
          </div>
          
      </div>
   </div>
  </nav>
@endauth