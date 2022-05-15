<header>
	<div class="header-inner ">
	  <div class="container">
		<div class="container-inner">
			<div class="inner">
				<div class="inner-inner">
					<div class="col-menu-mobile">
<style>
    #oc-menu-4705 .oc-menu-bar {
        background: #FFFFFF;
        color: #333333;
		padding: 14px 15px 14px 15px;
		position: relative;
    }
    #oc-menu-4705.oc-menu-bar {
        background: #FFFFFF;
        color: #333333;
    }
    #oc-menu-4705 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-4705 .ul-top-items .li-top-item .a-top-link {
        padding: 5px 20px 5px 20px;
        color: #282828;
        font-size: 14px;
        line-height: 25px;
        text-transform: uppercase;
        font-weight: 700;
    }
    #oc-menu-4705 .ul-top-items .li-top-item:hover, #oc-menu-4705 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-4705 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-4705 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 700;
    }
    #oc-menu-4705 .mega-menu-container {
        width: 100%;
        background: #FFFFFF;
        padding: 30px 30px 30px 30px;
        
    }
    #oc-menu-4705 .mega-menu-container .a-mega-second-link,#oc-menu-4705 .mega-menu-container .widget-html-title {
        color: #FFFFFF;
    }
	#oc-menu-4705 .mega-menu-container .a-mega-third-link {
        color: #FFFFFF;
    }
    #oc-menu-4705 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-4705 .ul-second-items .li-second-items:hover, #oc-menu-4705 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-4705 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 600;
    }
    #oc-menu-4705 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-4705 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-4705 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-4705 .ul-third-items .li-third-items:hover, #oc-menu-4705 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-4705 .ul-third-items .li-third-items .a-third-link {
        color: #757575;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-4705 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-4705 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
</style>
    
        
            <div class="oc-menu mobile-menu hidden-lg" id="oc-menu-4705">
                            <input type="hidden" id="menu-effect-4705" class="menu-effect" value="none" />
                <div class="oc-menu-bar">
                    <div class="left"><i class="fas fa-bars"></i> <span>Mobile Menu</span></div>
                    <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                </div>
                <ul class="ul-top-items">
                                                                        
                                                                                                <li class="li-top-item">
                                                                    <a class="a-top-link a-item">
                                                                                                                            <span>Kateqoriyalar</span>
                                                                            </a>
                                                                            <span class="top-click-show a-click-show">
                                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                            <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                        </span>
                                                                                                                                        
                                                                                                                        <div class="sub-menu-container">

                                            @foreach ($categories as $category)

                                                <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                            <li class="li-second-items">
                                                                        <a href="" class="a-second-link a-item">
                                                                            <span class="a-second-title">{{ $category->category_name }}</span>
                                                                        </a>
                                                                                <span class="second-click-show a-click-show">
                                                                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                            </span>
                                                                                <div class="flyout-third-items">

                                                                                    @foreach ($category->children as $child)
                                                                                        

                                                                                <ul class="ul-third-items">
                                                                                <li class="li-third-items">
                                                                                            <a href="{{ route('CategoryProduct',[$child->id,$child->slug]) }}" class="a-third-link"><span class="a-third-title">{{ $child->category_name }}</span></a>
                                                                                        </li>
                                                                                         
                                                                                                                                                                    </ul>

                                                                                    @endforeach

                                                                            </div>
                                                                                                                                            </li>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                    
                                                                                                </ul>

                                                @endforeach

                                            </div>
                                                                                                                                        </li>
                                                                                                                                        
                                                                                                <li class="li-top-item">
                                                                    <a class="a-top-link a-item" href="{{ route('templates') }}">
                                                                                                                            <span>Ana Səhifə</span>
                                                                            </a>
                                                                                                                                </li>
                                                                                                <li class="li-top-item">
                                                                    <a class="a-top-link a-item" href="{{ route('Bloq') }}">
                                                                                                                            <span>Bloq</span>
                                                                            </a>
                                                                                                                                </li>
                                                                                                <li class="li-top-item">
                                                                    <a class="a-top-link a-item" href="{{ route('faq') }}">
                                                                                                                            <span>Suallar</span>
                                                                            </a>
                                                                                                                                </li>
                                                                                                <li class="li-top-item">
                                                                    <a class="a-top-link a-item" href="{{ route('contact') }}">
                                                                                                                            <span>Əlaqə</span>
                                                                            </a>
                                                                                                                                </li>
                                                                                                                                 <li class="li-top-item">
                                                                    <a class="a-top-link a-item" href="{{ route('AboutUs') }}">
                                                                                                                            <span>Haqqımızda</span>
                                                                            </a>
                                                                        </li>
                                                            </ul>
                    </div>
    
  
											</div>
					<div class="logo-container">
                        @foreach ($settings as $setting)
                            
						<div id="logo">
						  							<a href="{{ route('templates') }}"><img src="{{ asset($setting->logo) }}" style="width: 226px; height: 80px;" title="Smartbooks4" alt="Smartbooks4" class="img-responsive" /></a>
						  						</div>
                                                  @endforeach

                                            </div>
					
					<div class="box-cart">
						<div id="top-links">
															<ul class="user ul-account list-unstyled">
															
																	
                                                                        @auth
                                                                            <a href="{{ route('LogoutUserController') }}">Çıxış</a>   
                                                                        @endauth
                                                                    
                                                                    @guest
                                                                        
                                                                    <li>
                                                                        <a href="{{ route('LoginIndex') }}">Giriş</a>
                                                                </li>
                        
                        <li>
                            və ya
                                                                        <a  href="{{ route('RegisterIndex') }}">Qeydiyyat</a>
                                                                </li>
                                                                @endguest
									
															</ul>
						</div>

                        

						<div id="cart" class="btn-group btn-block">
  <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn dropdown-toggle">
            
            @php
                $total = 0;
            @endphp

            @if ($cards && $carts)
                <span id="cart-total">
                    <span class="txt_number">{{ $carts->count() }}</span>
                    <span class="txt_items">Səbət</span>
                    @foreach ($cards as $card)
                    @php
                        $total += $card->books->price * $card->quantity;    
                    @endphp
                    @endforeach
                    <span class="total-price">{{ $total }} AZN <i class="fas fa-chevron-down"></i></span>
                  </span>
              </button>
    
              <ul class="dropdown-menu pull-right">
                <li class="has-scroll">
              <table class="table">
                        <tbody>

                            @foreach ($cards as $card)
                            <tr>
                  <td class="text-center">
                      <a href="{{ route('BooksProduct', $card->books->slug) }}">
                        <img class="cart-image" src="{{ asset($card->books->books_img) }}" alt="{{ $card->books->books_name }}" title="{{ $card->books->books_name }}"></a> 
                    </td>
                  <td class="text-left info-item">
                      <a class="cart-name" href="{{ route('BooksProduct', $card->books->slug) }}">{{ $card->books->books_name }}</a> 
                  <p class="cart-quantity">{{ $card->quantity }}&nbsp;×&nbsp;</p>
                    <p class="cart-price">{{ $card->books->price * $card->quantity }} AZN</p>
                </td>          
                  <td class="text-center cart-close">
                      <button type="submit" onclick="ShopCartDelete({{ $card->id }})" title="Remove" class="btn btn-danger btn-xs"><i class="icon-delete"></i>
                    </button></td>
                </tr>
                @endforeach 
                              </tbody>
                            </table>
            </li>
            <li>
                <p class="text-center cart-button">
                    <a href="{{ route('ShopCartList') }}">Səbətə Keç</a>
                    <a href="{{ route('OrderIndex') }}">Sifariş</a>
                </p>      
            </li>
              </ul>                  
            @else
            <span id="cart-total">
                <span class="txt_number">0</span>
                <span class="txt_items">Səbət</span>
                <span class="total-price">$0.00 <i class="fas fa-chevron-down"></i></span>
              </span>
          </button>
            <ul class="dropdown-menu pull-right">
                  <li>
                <p class="text-center cart-empty">Your shopping cart is empty!</p>
              </li>
                </ul>
            @endif
</div>

					</div>
					
					
				</div>
				<div class="col-search">
					<div id="search-by-category">
    <div class="search-container">
        <div class="categories-container">
           
        </div>
        <input type="text" name="search" id="text-search" placeholder="Axtarış ..." class=""  />
        
    </div>
    <div id="sp-btn-search" class="">
            <button type="button" id="btn-search-category" class="btn btn-default btn-lg">
                <span>Axtarış</span>
            </button>
        </div>
    <div class="search-ajax">
        <div class="ajax-loader-container" style="display: none;">
            <img src="http://smartbook4.demo.towerthemes.com/image/catalog/AjaxLoader.gif" class="ajax-load-img" width="30" height="30" alt="plazathemes.com" />
        </div>
        <div class="ajax-result-container">
            <!-- Content of search results -->
        </div>
    </div>
    <input type="hidden" id="ajax-search-enable" value="1" />
</div>


				</div>
			</div>
			
		  <div class="clearfix"></div>
		</div>
	  </div>
	</div>
	<div class="top-menu ">
		<div class="container">
			<div class="container-inner">
				<div class="col-ver">
											    <style>
    #oc-menu-4684 .oc-menu-bar {
        background: #62AB00;
        color: #FFFFFF;
		padding: 12px 20px 12px 20px;
		position: relative;
    }
    #oc-menu-4684.oc-menu-bar {
        background: #62AB00;
        color: #FFFFFF;
    }
    #oc-menu-4684 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #555555;
    }
    #oc-menu-4684 .ul-top-items .li-top-item .a-top-link {
        padding: 10px 25px 10px 28px;
        color: #555555;
        font-size: 14px;
        line-height: 26px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-4684 .ul-top-items .li-top-item:hover, #oc-menu-4684 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-4684 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-4684 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-4684 .mega-menu-container {
        width: 600px;
        background: #FFFFFF;
        padding: 30px 30px 8px 30px;
        
    }
    #oc-menu-4684 .mega-menu-container .a-mega-second-link,#oc-menu-4684 .mega-menu-container .widget-html-title {
        color: #282828;
    }
	#oc-menu-4684 .mega-menu-container .a-mega-third-link {
        color: #666666;
    }
    #oc-menu-4684 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-4684 .ul-second-items .li-second-items:hover, #oc-menu-4684 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-4684 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 600;
    }
    #oc-menu-4684 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-4684 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-4684 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-4684 .ul-third-items .li-third-items:hover, #oc-menu-4684 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-4684 .ul-third-items .li-third-items .a-third-link {
        color: #666666;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-4684 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-4684 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
</style>
    
                        <div class="oc-menu vertical-menu visible-lg" id="oc-menu-4684">
                            <input type="hidden" id="menu-effect-4684" class="menu-effect" value="none" />
                <div class="oc-menu-bar">
                    <div class="left"><i class="fas fa-bars"></i> <span>Kateqoriyalar</span></div>
                    <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                </div>
                <ul class="ul-top-items">

                    @foreach ($categories as $category)

                    <li class="li-top-item left  has-child">
                        <a class="a-top-link a-item" href="">

                            

                            <span>{{ $category->category_name }}</span>
                      
                         
                                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                        
                                         <div class="flyout-menu-container sub-menu-container left">
                                        
                                            @foreach ($category->children as $child)

                                            <ul class="ul-second-items">                                                                                                                                                                                                                                                     <li class="li-second-items">
                                                <a href="{{ route('CategoryProduct',[$child->id,$child->slug]) }}" class="a-second-link a-item">
                                                <span class="a-second-title">{{ $child->category_name }}</span></a>
                        </li>
                                            </ul>

                                            @endforeach

                                        </div>
                        </li>  

                        @endforeach                                                                             
</li>
                </ul>
        </div>
    
    
  
									</div>
									    <div class="header-phone">
<p>Pulsuz Dəstək 24/7  </p>
@foreach ($settings as $setting)
    <a href="tel:{{ $setting->contact_phone }}"><p>{!! "&nbsp" !!}{{ $setting->contact_phone }}</p></a>
@endforeach
</div>
  
								<div class="col-hoz fix">
											    <style>
    #oc-menu-2199 .oc-menu-bar {
        background: #FFFFFF;
        color: #FFFFFF;
		padding: 15px 15px 15px 15px;
		position: relative;
    }
    #oc-menu-2199.oc-menu-bar {
        background: #FFFFFF;
        color: #FFFFFF;
    }
    #oc-menu-2199 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-2199 .ul-top-items .li-top-item .a-top-link {
        padding: 15px 15px 15px 15px;
        color: #282828;
        font-size: 16px;
        line-height: 24px;
        text-transform: uppercase;
        font-weight: 400;
    }
    #oc-menu-2199 .ul-top-items .li-top-item:hover, #oc-menu-2199 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-2199 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-2199 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-2199 .mega-menu-container {
        width: 768px;
        background: #FFFFFF;
        padding: 35px 35px 32px 35px;
        
    }
    #oc-menu-2199 .mega-menu-container .a-mega-second-link,#oc-menu-2199 .mega-menu-container .widget-html-title {
        color: #282828;
    }
	#oc-menu-2199 .mega-menu-container .a-mega-third-link {
        color: #666666;
    }
    #oc-menu-2199 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-2199 .ul-second-items .li-second-items:hover, #oc-menu-2199 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-2199 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
    }
    #oc-menu-2199 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-2199 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-2199 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-2199 .ul-third-items .li-third-items:hover, #oc-menu-2199 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-2199 .ul-third-items .li-third-items .a-third-link {
        color: #666666;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-2199 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-2199 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
</style>
            <div class="oc-menu horizontal-menu oc-menu-bar visible-lg" id="oc-menu-2199">
			
                            <input type="hidden" id="menu-effect-2199" class="menu-effect" value="none" />
                <ul class="ul-top-items">
                                                                        <li class="li-top-item left " style="float: left">
                                                                    <a class="a-top-link" href="{{ route('templates') }}">
                                                                                                                            <span>Ana Səhifə</span>
                                                                                                                    </a>
                                                                                            </li>
                                                
                                                                                                <li class="li-top-item left " style="float: left">
                                                                    <a class="a-top-link" href="{{ route('Bloq') }}">
                                                                                                                            <span>Bloq</span>
                                                                                                                    </a>
                                                                                            </li>
                                                                                            <li class="li-top-item left " style="float: left">
                                                                                                <a class="a-top-link" href="{{ route('faq') }}">
                                                                                                                                                        <span>Suallar</span>
                                                                                                                                                </a>
                                                                                                                        </li>
                                                                                            <li class="li-top-item left " style="float: left">
                                                                                                <a class="a-top-link" href="{{ route('contact') }}">
                                                                                                                                                        <span>Əlaqə</span>
                                                                                                                                                </a>
                                                                                                                        </li>
                                                                                            <li class="li-top-item left " style="float: left">
                                                                    <a class="a-top-link" href="{{ route('AboutUs') }}">
                                                                                                                            <span>Haqqımızda</span>
                                                                                                                    </a>
                                                                                            </li>
                                                            </ul>
            			
        </div>
    
        
    
  
										
				</div>
			</div>
		</div>
		
		
		
	</div>
	
</header>
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
