<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Book House</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link @if(Request::segment(1) == "") active @endif" href="{{ route('index') }}">
                  <i class="fas fa-home"></i>
                  <p>Əsas Səhifə</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(Request::segment(1) == "settings") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "settings") active @endif">
              <i class="fas fa-cog"></i>
              <p>
                Nizamlamalar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('seoIndex') }}" class="nav-link @if(Request::segment(2) == "seo") active @endif" href="{{ route('seoIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Seo Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logoIndex') }}" class="nav-link @if(Request::segment(2) == "logo") active @endif" href="{{ route('logoIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Logo Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contactIndex') }}" class="nav-link @if(Request::segment(2) == "contact") active @endif" href="{{ route('contactIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Əlaqə Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('socialIndex') }}" class="nav-link @if(Request::segment(2) == "social") active @endif" href="{{ route('socialIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Sosial Şəbəkələr Nizamlamaları</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if(Request::segment(1) == "partners") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "partners") active @endif">
              <i class="fas fa-handshake"></i>
              <p>
                Tərəfdaşlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('PartnersListView') }}" class="nav-link @if(Request::segment(2) == "list") active @endif" href="{{ route('PartnersListView') }}">
                  <i class="far fa-stop-circle"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addPartnersIndex') }}" class="nav-link @if(Request::segment(2) == "add") active @endif" href="{{ route('addPartnersIndex') }}">
                  <i class="far fa-stop-circle"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
