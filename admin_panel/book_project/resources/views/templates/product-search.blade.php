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
                                      <option>Accessories</option>                      
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

                      @foreach ($products as $product)
                          
                            <div class="product-layout product-grid grid-style col-lg-3 col-md-3 col-sm-6 col-xs-6 product-item">
                              <div class="product-thumb">
                                  <div class="item item1">
                                      <div class="item-inner">
                                          <div class="caption-top"><p class="manufacture-product ">
                                                  <a href="index98fa.html?route=product/manufacturer/info&amp;manufacturer_id=8">{{ $product->Writers($product->writer_id)->writer_name }}</a>
                                              </p><h4 class="product-name"><a href="index673a.html?route=product/product&amp;product_id=143&amp;tag=Luxury&amp;sort=pd.name&amp;order=DESC&amp;limit=25">{{ $product->books_name }}</a></h4>  
                                          </div>
                                          <div class="box-border">
                                              <div class="image images-container">
                                                  <div class="inner">
                                                  <div class="box-label">	
                                                                                                              
                                                                                                          
                                                  </div>
                                                                                                      <div class="image rotate-image-container">
                                                          <a href="{{ route('BooksProduct',$product->slug) }}">
                                                              <img src="{{ asset($product->books_img) }}" alt="{{ $product->books_name }}" title="{{ $product->books_name }}" class="img-responsive img-default-image">
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
                                                    <p class="product-des">{{ Str::limit($product->books_description, 100, '...') }}</p>
                                                                                                        <div class="price-box">
                                                                                                                <p class="special-price"><span class="price">{{ $product->price }} AZN</span></p>
                                                            <p class="old-price"><span class="price">{{ $product->old_price }} AZN</span></p>						  
                                                         </div>  <div class="label-product label_sale"><span>-{{ $product->price_cut }}% </span></div>
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
                          @endforeach
                  </div>
            </div>
        </div>
      </div></div>
  </div>
@endsection