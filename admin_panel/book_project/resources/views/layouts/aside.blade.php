<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
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

          <li class="nav-item @if(Request::segment(1) == "banners") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "banners") active @endif">
              <i class="fas fa-images"></i>
              <p>
                Banner Bölməsi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('BannerList') }}" class="nav-link @if(Request::segment(2) == "banner_list") active @endif" href="{{ route('BannerList') }}">
                  <i class="fas fa-image"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('BannerAdd') }}" class="nav-link @if(Request::segment(2) == "banner_add") active @endif" href="{{ route('BannerAdd') }}">
                  <i class="fas fa-image"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if(Request::segment(1) == "features") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "features") active @endif">
              <i class="fas fa-braille"></i>
              <p>
                Xüsusiyyət Bölməsi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('FeatureSectionIndex') }}" class="nav-link @if(Request::segment(2) == "features_list") active @endif" href="{{ route('FeatureSectionIndex') }}">
                  <i class="fab fa-buffer"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('FeatureSectionAdd') }}" class="nav-link @if(Request::segment(2) == "features_add") active @endif" href="{{ route('FeatureSectionAdd') }}">
                  <i class="fab fa-buffer"></i>
                  <p>Əlavə Et</p>
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

          <li class="nav-item @if(Request::segment(1) == "questions") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "questions") active @endif">
              <i class="fas fa-question"></i>
              <p>
                Suallar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('listQuestions') }}" class="nav-link @if(Request::segment(2) == "questions_list") active @endif" href="{{ route('listQuestions') }}">
                  <i class="fas fa-question-circle"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addQuestionsIndex') }}" class="nav-link @if(Request::segment(2) == "questions_add") active @endif" href="{{ route('addQuestionsIndex') }}">
                  <i class="fas fa-question-circle"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if(Request::segment(1) == "blogs") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "blogs") active @endif">
              <i class="fas fa-blog"></i>
              <p>
                Bloq
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('BlogList') }}" class="nav-link @if(Request::segment(2) == "blog_list") active @endif" href="{{ route('BlogList') }}">
                  <i class="fab fa-blogger-b"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('BlogAddIndex') }}" class="nav-link @if(Request::segment(2) == "blog_add") active @endif" href="{{ route('BlogAddIndex') }}">
                  <i class="fab fa-blogger-b"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if(Request::segment(1) == "category") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(1) == "category") active @endif">
              <i class="fas fa-bars"></i>
              <p>
                Kateqoriya
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('CategoryListIndex') }}" class="nav-link @if(Request::segment(2) == "category_list") active @endif" href="{{ route('CategoryListIndex') }}">
                  <i class="fas fa-caret-down"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('CategoryAddIndex') }}" class="nav-link @if(Request::segment(2) == "category_add") active @endif" href="{{ route('CategoryAddIndex') }}">
                  <i class="fas fa-caret-down"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
