@extends('templates.master')
@section('title','Bloq')
@section('content')

<div class="breadcrumbs" style="height: 70px">
    <div class="container">
        <div class="inner">
            <ul class="breadcrumb">
                <li><a href="{{ route('templates') }}">Ana Səhifə</a></li>
                <li>Bloq</li>
            </ul>
        </div>
    </div>
</div>

<section class="inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-2 mb--40 mb-lg--0" style="float: right">
                    <div class="blog-list-cards">
                        @foreach ($blogs as $blog)
                                        <div class="blog-card card-style-list">
                                            <div class="row">
                                                <div class="col-md-5">
                                                        <a href="{{ route('BloqContent',$blog->slug) }}" class="image d-block">
                                                            <img src="{{ $blog->img }}" style="width:316px; height:208px;" alt="">
                                                        </>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-content">
                                                        <h3 class="title"><a href="{{ url('bloq/'.$blog->slug) }}">{{ $blog->title }}</a></h3>
                                                        <p class="post-meta"><span>{{ $blog->created_at->format('d M Y') }} </span> | <a href="#">{{ $blog->author }}</a></p>
                                                        <article>
                                                            <p>{!! Str::limit($blog->contents, '80', '...') !!}</p>
                                                            <a href="{{ url('bloq/'.$blog->slug) }}" class="blog-link">Devamını oxu</a>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        @endforeach
                        {{ $blogs->links() }}
                    </div>  
                    
            </div>

            <div class="col-lg-3">
                <div class="inner-page-sidebar">
                    <div class="single-block">
                        <h2 class="sidebar-title mb--30">Search</h2>
                        <div class="site-mini-search">
                            <form action="{{ url('/bloq') }}">
                                <input type="search" name="search" placeholder="Axtar..." />
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single-block">
                        <h2 class="sidebar-title mb--30">Bu gün atılan bloqlar</h2>
                        <ul class="sidebar-list mb--30">
                            
                            @foreach($blogs_archive as $archive)

                            <li style="list-style-type:none;"><a href="#">{{ $archive->title }} {{ $archive->created_at->format('d M Y') }}</a></li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="single-block">
                        <h2 class="sidebar-title mb--30">Bloq Arxivi</h2>
                        <ul class="sidebar-list mb--30">
                            
                            @foreach($blogs_count as $blog_count)


                                    <li><a href="#">{{ $blog_count->created_at->format('M Y') }} ({{ $blog_count->count() }})</a></li>

                            
                            {{-- <li><a href="#">December 2014 (3)</a></li>
                            <li> <a href="#">November 2014 (4)</a></li>
                            <li><a href="#">September 2014 (1)</a></li>
                            <li><a href="#">August 2014 (1)</a></li> --}}

                            @endforeach

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
    {{-- <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('js/dataTables.bootstrap4.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> --}}

@endsection
@section('addjs')
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    {{-- <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/be_tables_datatables.min.js') }}"></script> --}}
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> --}}
    {{-- <script>
        $(document).ready( function () {
    $('#table_id').DataTable();
} );
    </script> --}}
@endsection