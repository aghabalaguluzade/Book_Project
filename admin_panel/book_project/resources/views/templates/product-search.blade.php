@extends('templates.master')
@section('content')
<div id="product-search" class="container">
  
    <div class="row"><div class="col-order">
                  <div id="content" class="col-sm-12">
        <h1>Search</h1>
        <label class="control-label" for="input-search">Search Criteria</label>
        <div class="row">
          <div class="col-sm-4">
            <input type="text" name="search" value="" placeholder="Keywords" id="input-search" class="form-control">
          </div>
          <div class="col-sm-3">
            <select name="category_id" class="form-control">
              <option value="0">All Categories</option>
                                      <option value="428">Accessories</option>
                                                              <option value="451">Arts &amp; Photography</option>
                                                  <option value="452">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brake Tools</option>
                                                              <option value="453">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Driveshafts</option>
                                                              <option value="455">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Emergency Brake</option>
                                                              <option value="454">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spools</option>
                                                                          <option value="56">Biographies</option>
                                                  <option value="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wheel Simulators</option>
                                                  <option value="329">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bags &amp; Cases</option>
                                                  <option value="330">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Binoculars &amp; Scopes</option>
                                                  <option value="331">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Digital Cameras</option>
                                                  <option value="332">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Film Photography</option>
                                                  <option value="334">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lighting &amp; Studio</option>
                                                              <option value="86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seals &amp; Hubs</option>
                                                  <option value="396">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSLR Body &amp; Lens</option>
                                                  <option value="397">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSLR Body Only</option>
                                                  <option value="399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSLR Lenses</option>
                                                  <option value="398">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSLR Package Deals</option>
                                                              <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wheel Rim Screws</option>
                                                  <option value="401">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camera Lenses</option>
                                                  <option value="400">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DSLR Lenses</option>
                                                  <option value="402">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lens Accessories</option>
                                                  <option value="408">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lowepro</option>
                                                  <option value="410">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SanDisk</option>
                                                              <option value="91">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wheel Bearings</option>
                                                  <option value="407">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bower</option>
                                                  <option value="411">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celestron</option>
                                                  <option value="412">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flipbac</option>
                                                  <option value="409">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gary Fong</option>
                                                  <option value="413">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GigaPan</option>
                                                                          <option value="456">Business &amp; Money</option>
                                                  <option value="457">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2-Stroke</option>
                                                              <option value="460">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4-Stroke</option>
                                                              <option value="459">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diesel</option>
                                                              <option value="458">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gasoline</option>
                                                                          <option value="429">Calendars</option>
                                                  <option value="434">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turbo Blanket </option>
                                                              <option value="435">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turbo Kits</option>
                                                              <option value="433">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turbo Wrap</option>
                                                              <option value="432">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turbocharger</option>
                                                                          <option value="446">Children's Books</option>
                                                  <option value="450">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bulbs</option>
                                                              <option value="448">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Headlights</option>
                                                              <option value="447">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Light Bars</option>
                                                              <option value="449">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Light Kits</option>
                                                                          <option value="124">Comics</option>
                                                  <option value="305">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Handbag</option>
                                                  <option value="338">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CD Players &amp; Turntables</option>
                                                  <option value="335">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Theater Systems</option>
                                                  <option value="337">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Receivers &amp; Amplifiers</option>
                                                  <option value="336">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Speakers</option>
                                                  <option value="339">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stereo Shelf Systems</option>
                                                  <option value="340">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wireless &amp; Multiroom Audio</option>
                                                              <option value="125">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>
                                                              <option value="133">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clothing</option>
                                                              <option value="137">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shoes</option>
                                                  <option value="347">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4K UHD Streaming Media Players</option>
                                                  <option value="341">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apple TV</option>
                                                  <option value="342">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fire TV Streaming Media Devices</option>
                                                  <option value="343">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Google Chromecast</option>
                                                  <option value="346">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NVIDIA Shield</option>
                                                  <option value="344">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Roku</option>
                                                  <option value="348">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Streaming Blu-ray Players</option>
                                                  <option value="349">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Streaming Media Player Accessories</option>
                                                  <option value="345">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TiVo</option>
                                                                          <option value="309">Cookbooks</option>
                                                  <option value="376">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calculators</option>
                                                              <option value="425">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check Trousers</option>
                                                              <option value="377">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ink &amp; Toner</option>
                                                              <option value="426">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low-Cut Jeans</option>
                                                                          <option value="430">Education</option>
                                                              <option value="312">Indoor Living</option>
                                                  <option value="386">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge</option>
                                                              <option value="385">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hub</option>
                                                              <option value="384">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Repeater</option>
                                                              <option value="387">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Switch</option>
                                                              <option value="308">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video Games Cosoles</option>
                                                  <option value="373">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PlayStation 3</option>
                                                  <option value="372">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PlayStation 4</option>
                                                  <option value="375">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xbox 360</option>
                                                  <option value="374">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xbox One</option>
                                                                          <option value="427">Perfomance Filters</option>
                                                              <option value="20">Shop</option>
                                                  <option value="307">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saws</option>
                                                  <option value="424">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All-in-One Computers</option>
                                                  <option value="423">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Cards &amp; Components</option>
                                                  <option value="415">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fans, Heatsinks &amp; Cooling</option>
                                                  <option value="416">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPUs / Video Graphics Cards</option>
                                                  <option value="417">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hard Drives &amp; Storage</option>
                                                  <option value="360">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Surface Go</option>
                                                  <option value="414">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Optical Drives</option>
                                                              <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Concrete Tools</option>
                                                  <option value="361">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4G LTE Tablets</option>
                                                  <option value="358">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apple iPad</option>
                                                  <option value="365">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Readers</option>
                                                  <option value="364">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iPad &amp; Tablet Accessories</option>
                                                  <option value="362">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kids' Tablets</option>
                                                              <option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drills</option>
                                                  <option value="418">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cables &amp; Connectors</option>
                                                  <option value="419">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cleaning Equipment &amp; Kits</option>
                                                  <option value="420">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer Speakers</option>
                                                  <option value="421">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graphics Tablets</option>
                                                  <option value="359">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Microsoft Surface Pro</option>
                                                  <option value="422">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers, Ink &amp; Toner</option>
                                                  <option value="363">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Refurbished Tablets</option>
                                                              <option value="304">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sanders</option>
                                                            </select>
          </div>
          <div class="col-sm-3">
            <label class="checkbox-inline">
                          <input type="checkbox" name="sub_category" value="1" disabled="">
                          Search in subcategories</label>
          </div>
        </div>
        <p>
          <label class="checkbox-inline">
                      <input type="checkbox" name="description" value="1" id="description">
                      Search in product descriptions</label>
        </p>
        <input type="button" value="Search" id="button-search" class="btn btn-primary">
        <h2>Search entire store here ...</h2>
        <div class="custom-category">
                              
                  <div><a href="index6431.html?route=product/compare" id="compare-total">Product Compare (0)</a></div>
                  
                  <div class="toolbar toolbar-products">
                      <div class="modes">
                                                      <button type="button" id="grid-view" class="btn btn-default btn-grid active" title="Grid">Grid</button>
                              <button type="button" id="list-view" class="btn btn-default btn-list" title="List">List</button>
                                               </div>
                      <div class="toolbar-amount">
                          <span>Showing 1 to 7 of 7 (1 Pages)</span>
                      </div>
                      <div class="sorter">
                                                      <label for="input-sort">Sort By:</label>
                              <select id="input-sort" class="form-control" onchange="location = this.value;">
                                                                                                              <option value="indexa3fa.html?route=product/search&amp;sort=p.sort_order&amp;order=ASC&amp;tag=Luxury&amp;limit=25">Default</option>
                                                                                                                                                  <option value="indexdf10.html?route=product/search&amp;sort=pd.name&amp;order=ASC&amp;tag=Luxury&amp;limit=25">Name (A - Z)</option>
                                                                                                                                                  <option value="http://smartbook4.demo.towerthemes.com/index.php?route=product/search&amp;sort=pd.name&amp;order=DESC&amp;tag=Luxury&amp;limit=25" selected="selected">Name (Z - A)</option>
                                                                                                                                                  <option value="index845b.html?route=product/search&amp;sort=p.price&amp;order=ASC&amp;tag=Luxury&amp;limit=25">Price (Low &gt; High)</option>
                                                                                                                                                  <option value="indexbed9.html?route=product/search&amp;sort=p.price&amp;order=DESC&amp;tag=Luxury&amp;limit=25">Price (High &gt; Low)</option>
                                                                                                                                                  <option value="indexa8bf.html?route=product/search&amp;sort=rating&amp;order=DESC&amp;tag=Luxury&amp;limit=25">Rating (Highest)</option>
                                                                                                                                                  <option value="index915b.html?route=product/search&amp;sort=rating&amp;order=ASC&amp;tag=Luxury&amp;limit=25">Rating (Lowest)</option>
                                                                                                                                                  <option value="index7c40.html?route=product/search&amp;sort=p.model&amp;order=ASC&amp;tag=Luxury&amp;limit=25">Model (A - Z)</option>
                                                                                                                                                  <option value="indexbac4.html?route=product/search&amp;sort=p.model&amp;order=DESC&amp;tag=Luxury&amp;limit=25">Model (Z - A)</option>
                                                                                                  </select>
                                              </div>
                      <div class="limiter">
                                                      <label for="input-limit">Show:</label>
                              <select id="input-limit" class="form-control" onchange="location = this.value;">
                                                                                                              <option value="index863b.html?route=product/search&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=9">9</option>
                                                                                                                                                  <option value="http://smartbook4.demo.towerthemes.com/index.php?route=product/search&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25" selected="selected">25</option>
                                                                                                                                                  <option value="index43b8.html?route=product/search&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=50">50</option>
                                                                                                                                                  <option value="indexe35b.html?route=product/search&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=75">75</option>
                                                                                                                                                  <option value="indexa1ea.html?route=product/search&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=100">100</option>
                                                                                                  </select>
                                              </div>
                  </div>
                  <div class="row">
                                                                  <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item1">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                              </p><h4 class="product-name"><a href="index673a.html?route=product/product&amp;product_id=143&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Nokia Steel HR Hybrid  Smartwatch</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                              <div class="label-product label_new"><span>New</span></div>
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="index673a.html?route=product/product&amp;product_id=143&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/14-600x600.jpg" alt="Nokia Steel HR Hybrid  Smartwatch" title="Nokia Steel HR Hybrid  Smartwatch" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('143', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('143');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('143');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('index673a.html?route=product/product&amp;product_id=143&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">Revolutionary multi-touch interface.
      iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll throu..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="regular-price"><span class="price">$95.00</span></p>
                                                                                                                                                              </div>
                                                                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="rating5">rating</div>
                                                                                                                                                                  </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item2">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                              </p><h4 class="product-name"><a href="indexc111.html?route=product/product&amp;product_id=56&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Koss KPH7 Lightweight  Portable Headphone</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                              <div class="label-product label_new"><span>New</span></div>
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="indexc111.html?route=product/product&amp;product_id=56&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/11-600x600.jpg" alt="Koss KPH7 Lightweight  Portable Headphone" title="Koss KPH7 Lightweight  Portable Headphone" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('56', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('56');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('56');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('indexc111.html?route=product/product&amp;product_id=56&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, o..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="special-price"><span class="price">$70.00</span></p>
                                                          <p class="old-price"><span class="price">$75.00</span></p>						  
                                                                                                                                                              </div>
                                                                                                                                                      <div class="label-product label_sale"><span>-7% </span></div>
                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                      <div class="rating2">rating</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item3">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                              </p><h4 class="product-name"><a href="indexe61c.html?route=product/product&amp;product_id=60&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Kodak PIXPRO Astro Zoom AZ421 16 MP</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                              <div class="label-product label_new"><span>New</span></div>
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="indexe61c.html?route=product/product&amp;product_id=60&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/10-600x600.jpg" alt="Kodak PIXPRO Astro Zoom AZ421 16 MP" title="Kodak PIXPRO Astro Zoom AZ421 16 MP" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('60', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('60');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('60');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('indexe61c.html?route=product/product&amp;product_id=60&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">Revolutionary multi-touch interface.
      iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll throu..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="regular-price"><span class="price">$95.00</span></p>
                                                                                                                                                              </div>
                                                                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div class="rating4">rating</div>
                                                                                                                                                                                                                                                                              </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item4">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index8be0.html?route=product/manufacturer/info&amp;manufacturer_id=10">Sony</a>
                                              </p><h4 class="product-name"><a href="index7da6.html?route=product/product&amp;product_id=189&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Beats Solo3 Wireless  On-Ear Headphones 2</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                              <div class="label-product label_new"><span>New</span></div>
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="index7da6.html?route=product/product&amp;product_id=189&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/16-600x600.jpg" alt="Beats Solo3 Wireless  On-Ear Headphones 2" title="Beats Solo3 Wireless  On-Ear Headphones 2" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('189', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('189');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('189');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('index7da6.html?route=product/product&amp;product_id=189&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powe..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="regular-price"><span class="price">$1,000.00</span></p>
                                                                                                                                                              </div>
                                                                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                              <div class="rating0">rating</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item5">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index8be0.html?route=product/manufacturer/info&amp;manufacturer_id=10">Sony</a>
                                              </p><h4 class="product-name"><a href="index5d85.html?route=product/product&amp;product_id=55&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Beats Solo3 Wireless  On-Ear Headphones</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="index5d85.html?route=product/product&amp;product_id=55&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/7-600x600.jpg" alt="Beats Solo3 Wireless  On-Ear Headphones" title="Beats Solo3 Wireless  On-Ear Headphones" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('55', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('55');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('55');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('index5d85.html?route=product/product&amp;product_id=55&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">Unprecedented power. The next generation of processing technology has arrived. Built into the newest VAIO notebooks lies Intel's latest, most powe..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="regular-price"><span class="price">$1,000.00</span></p>
                                                                                                                                                              </div>
                                                                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div class="rating4">rating</div>
                                                                                                                                                                                                                                                                              </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item6">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="indexe69c.html?route=product/manufacturer/info&amp;manufacturer_id=7">Hewlett-Packard</a>
                                              </p><h4 class="product-name"><a href="indexa6dc.html?route=product/product&amp;product_id=52&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Apple iPad with Retina  Display MD510LL/A </a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="indexa6dc.html?route=product/product&amp;product_id=52&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/2-600x600.jpg" alt="Apple iPad with Retina  Display MD510LL/A " title="Apple iPad with Retina  Display MD510LL/A " class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('52', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('52');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('52');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('indexa6dc.html?route=product/product&amp;product_id=52&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="special-price"><span class="price">$55.00</span></p>
                                                          <p class="old-price"><span class="price">$60.00</span></p>						  
                                                                                                                                                              </div>
                                                                                                                                                      <div class="label-product label_sale"><span>-8% </span></div>
                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                              <div class="rating0">rating</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                                              <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item7">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                              </p><h4 class="product-name"><a href="indexa2bf.html?route=product/product&amp;product_id=57&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">Amazon Cloud Cam  Security Camera</a></h4>
                                                                                          
                                                                                          
                                              
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="indexa2bf.html?route=product/product&amp;product_id=57&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                              <img src="image/cache/catalog/product/1-600x600.jpg" alt="Amazon Cloud Cam  Security Camera" title="Amazon Cloud Cam  Security Camera" class="img-responsive img-default-image">
                                                                                                                      </a>
                                                          
                                                      </div>
                                                                                                  
                                                  
                                                  
                                                  
                                                  </div>
                                              <div class="button-group action-links">
                                                      <button type="button" class="button btn-cart" title="Add to Cart" onclick="cart.add('57', '1');"><span>Add to Cart</span></button>
                                                      
                                                      <button type="button" class="button btn-wishlist" title="Add to Wish List" onclick="wishlist.add('57');"><span>Add to Wish List</span></button>
                                                      
                                                      <button type="button" class="button btn-compare" title="Compare this Product" onclick="compare.add('57');"><span>Compare this Product</span></button>
                                                      <button type="button" class="button btn-quickview" title="Quick View" onclick="ocquickview.ajaxView('indexa2bf.html?route=product/product&amp;product_id=57&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25')"><span>Quick View</span></button>
                                                  </div></div>
                                              <div class="caption">
                                                  <div class="inner">
                                                  
                                                   
                                                  
                                                  
                                                  <p class="product-des">More room to move.
          
              With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or..</p>
                                                                                                      <div class="price-box">
                                                                                                              <p class="regular-price"><span class="price">$80.00</span></p>
                                                                                                                                                              </div>
                                                                                                                                                  <div class="ratings">
                                                      <div class="rating-box">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <div class="rating4">rating</div>
                                                                                                                                                                                                                                                                              </div>
                                                  </div>	
                                                  
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                       
                  </div>
                                                  </div>
        </div>
      </div></div>
  </div>
@endsection