<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Book House</span>
    </a>

    <!-- Sidebar -->
    @auth
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset(Auth::user()->img) }}" class="img-circle elevation-2" alt="User Image" />
        </div>
        <div class="info">
          <a href="" class="d-block">{{ Auth::user()->name }} <br /> ({{ Auth::user()->roles->pluck('name') }})</a>
        </div>
      </div>
    @endauth
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          {{-- Nizamlamalar --}}

          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link @if(Request::segment(2) == "") active @endif" href="{{ route('index') }}">
                  <i class="fas fa-home"></i>
                  <p>Əsas Səhifə</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if(Request::segment(2) == "settings") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "settings") active @endif">
              <i class="fas fa-cog"></i>
              <p>
                Nizamlamalar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('seoIndex') }}" class="nav-link @if(Request::segment(3) == "seo") active @endif" href="{{ route('seoIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Seo Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('logoIndex') }}" class="nav-link @if(Request::segment(3) == "logo") active @endif" href="{{ route('logoIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Logo Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contactIndex') }}" class="nav-link @if(Request::segment(3) == "contact") active @endif" href="{{ route('contactIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Əlaqə Nizamlamaları</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('socialIndex') }}" class="nav-link @if(Request::segment(3) == "social") active @endif" href="{{ route('socialIndex') }}">
                  <i class="fab fa-gg-circle"></i>
                  <p>Sosial Şəbəkələr Nizamlamaları</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Banner Bölməsi --}}

          <li class="nav-item @if(Request::segment(2) == "banners") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "banners") active @endif">
              <i class="fas fa-images"></i>
              <p>
                Banner Bölməsi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('BannerList') }}" class="nav-link @if(Request::segment(3) == "banner_list") active @endif" href="{{ route('BannerList') }}">
                  <i class="fas fa-image"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('BannerAdd') }}" class="nav-link @if(Request::segment(3) == "banner_add") active @endif" href="{{ route('BannerAdd') }}">
                  <i class="fas fa-image"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Xüsusiyyət Bölməsi --}}

          <li class="nav-item @if(Request::segment(2) == "features") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "features") active @endif">
              <i class="fas fa-braille"></i>
              <p>
                Xüsusiyyət Bölməsi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('FeatureSectionIndex') }}" class="nav-link @if(Request::segment(3) == "features_list") active @endif" href="{{ route('FeatureSectionIndex') }}">
                  <i class="fab fa-buffer"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('FeatureSectionAdd') }}" class="nav-link @if(Request::segment(3) == "features_add") active @endif" href="{{ route('FeatureSectionAdd') }}">
                  <i class="fab fa-buffer"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Tərəfdaşlar --}}

          <li class="nav-item @if(Request::segment(2) == "partners") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "partners") active @endif">
              <i class="fas fa-handshake"></i>
              <p>
                Tərəfdaşlar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('PartnersListView') }}" class="nav-link @if(Request::segment(3) == "list") active @endif" href="{{ route('PartnersListView') }}">
                  <i class="far fa-stop-circle"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addPartnersIndex') }}" class="nav-link @if(Request::segment(3) == "add") active @endif" href="{{ route('addPartnersIndex') }}">
                  <i class="far fa-stop-circle"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Yazıçılar --}}

          <li class="nav-item @if(Request::segment(2) == "writers") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "writers") active @endif">
              <i class="fas fa-user-edit"></i>
              <p>
                Yazıçılar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('listWriters') }}" class="nav-link @if(Request::segment(3) == "writers_list") active @endif" href="{{ route('listWriters') }}">
                  <i class="fas fa-pen-nib"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addWriters') }}" class="nav-link @if(Request::segment(3) == "writers_add") active @endif" href="{{ route('addWriters') }}">
                  <i class="fas fa-feather-alt"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Suallar --}}

          <li class="nav-item @if(Request::segment(2) == "questions") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "questions") active @endif">
              <i class="fas fa-question"></i>
              <p>
                Suallar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('listQuestions') }}" class="nav-link @if(Request::segment(3) == "questions_list") active @endif" href="{{ route('listQuestions') }}">
                  <i class="fas fa-question-circle"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('addQuestionsIndex') }}" class="nav-link @if(Request::segment(3) == "questions_add") active @endif" href="{{ route('addQuestionsIndex') }}">
                  <i class="fas fa-question-circle"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Bloq --}}

          <li class="nav-item @if(Request::segment(2) == "blogs") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "blogs") active @endif">
              <i class="fas fa-blog"></i>
              <p>
                Bloq
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('BlogList') }}" class="nav-link @if(Request::segment(3) == "blog_list") active @endif" href="{{ route('BlogList') }}">
                  <i class="fab fa-blogger-b"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('BlogAddIndex') }}" class="nav-link @if(Request::segment(3) == "blog_add") active @endif" href="{{ route('BlogAddIndex') }}">
                  <i class="fab fa-blogger-b"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Kateqoriya --}}
          
          <li class="nav-item @if(Request::segment(2) == "category") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "category") active @endif">
              <i class="fas fa-bars"></i>
              <p>
                Kateqoriya
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('CategoryListIndex') }}" class="nav-link @if(Request::segment(3) == "category_list") active @endif" href="{{ route('CategoryListIndex') }}">
                  <i class="fas fa-caret-down"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('CategoryAddIndex') }}" class="nav-link @if(Request::segment(3) == "category_add") active @endif" href="{{ route('CategoryAddIndex') }}">
                  <i class="fas fa-caret-down"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Kitablar --}}

          <li class="nav-item @if(Request::segment(2) == "books") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "books") active @endif">
              <i class="fas fa-book"></i>
              <p>
                Kitablar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('BooksList') }}" class="nav-link @if(Request::segment(3) == "books-list") active @endif" href="{{ route('BooksList') }}">
                  <i class="fas fa-book"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('BooksAdd') }}" class="nav-link @if(Request::segment(3) == "books-add") active @endif" href="{{ route('BooksAdd') }}">
                  <i class="fas fa-book"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- İstifadəçilər --}}

          <li class="nav-item @if(Request::segment(2) == "users") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "users") active @endif">
              <i class="fas fa-user-friends"></i>
              <p>
                İstifadəçilər
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('UsersListIndex') }}" class="nav-link @if(Request::segment(3) == "users-list") active @endif" href="{{ route('UsersListIndex') }}">
                  <i class="fas fa-user"></i>
                  <p>Siyahı</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- Rollar --}}

          <li class="nav-item @if(Request::segment(2) == "roles") menu-open @endif">
            <a href="" class="nav-link @if(Request::segment(2) == "roles") active @endif">
              <i class="fas fa-user-friends"></i>
              <p>
                Rollar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('UsersListIndex') }}" class="nav-link @if(Request::segment(3) == "users-list") active @endif" href="{{ route('UsersListIndex') }}">
                  <i class="fas fa-user"></i>
                  <p>Siyahı</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('RolesAddIndex') }}" class="nav-link @if(Request::segment(3) == "roles-add") active @endif" href="{{ route('RolesAddIndex') }}">
                  <i class="fas fa-user"></i>
                  <p>Əlavə Et</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
  </aside>
