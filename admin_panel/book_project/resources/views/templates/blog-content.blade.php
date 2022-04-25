@extends('templates.master')
@foreach ($blogs as $blog)
@section('title',$blog->title)
@endforeach
@section('content')
<section class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2 mb--40 mb-lg--0">

                @foreach($blogs as $blog)

                <div class="blog-post post-details mb--50">
                    <div class="blog-image">
                        <img src="{{ asset($blog->img) }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-content mt--30">
                        <header>
                            <h3 class="blog-title">{{ $blog->title }}</h3>
                            <div class="post-meta">
                                <span class="post-author">
                                    <i class="fas fa-user"></i>
                                    <span class="text-gray">Yayımlayan : </span>
                                    {{ $blog->author }}
                                </span>
                                <span class="post-separator">|</span>
                                <span class="post-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="text-gray">Yayımlanıb : </span>
                                    {{ $blog->created_at->format('d M Y') }}
                                </span>
                            </div>
                        </header>
                        <article>
                            <h3 class="d-none sr-only">blob-article</h3>
                            <p class="p-0">{!! $blog->contents !!}</p>
                        </article>
                    </div>
                </div>

                @endforeach

                <div class="comment-block-wrapper mb--50">
                    <h3>3 Comments</h3>
                    <div class="single-comment">
                        <div class="comment-avatar">
                            <img src="image/icon/author-logo.png" alt="">
                        </div>
                        <div class="comment-text">
                            <h5 class="author"> <a href="#"> Author</a></h5>
                            <span class="time">October 8, 2014 at 12:38 pm</span>
                            <p>Ame No Parade</p>
                        </div>
                        <a href="#" class="btn btn-outlined--primary btn-rounded reply-btn mt-5">Reply</a>
                    </div>
                </div>
                <div class="replay-form-wrapper">
                    <h3 class="mt-0">LEAVE A REPLY</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <form action="https://template.hasthemes.com/pustok/pustok/" class="blog-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="message">Comment</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="text" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" id="website" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="submit-btn">
                                    <a href="#" class="btn btn-black">Post Comment</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="inner-page-sidebar">
                    <div class="single-block">
                        <h2 class="sidebar-title mb--30">Search</h2>
                        <div class="site-mini-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <div class="single-block">
                        <h2 class="sidebar-title mb--30">BLOG ARCHIVES</h2>
                        <ul class="sidebar-list mb--30">
                            <li><a href="#"> March 2015 (1)</a></li>
                            <li><a href="#">December 2014 (3)</a></li>
                            <li> <a href="#">November 2014 (4)</a></li>
                            <li><a href="#">September 2014 (1)</a></li>
                            <li><a href="#">August 2014 (1)</a></li>
                        </ul>
                    </div>
                    <div class="single-block ">
                        <h2 class="sidebar-title mb--30">RECENT POSTS</h2>
                        <ul class="sidebar-list">
                            <li><a href="#"> Blog image post</a></li>
                            <li><a href="#">Post with Gallery</a></li>
                            <li> <a href="#">Post with Audio</a></li>
                            <li><a href="#">Post with Video</a></li>
                            <li><a href="#">Maecenas ultricies</a></li>
                        </ul>
                    </div>
                    <!-- Promo Block -->
                    <div class="single-block">
                        <a href="#" class="promo-image sidebar">
                            <img src="image/others/home-side-promo.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('addcss')
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection
@section('addjs')
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection