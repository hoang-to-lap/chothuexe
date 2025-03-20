<nav class="navbar navbar-expand-lg navbar-dark bg-success" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><span>{{ $setting->site_name }}</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu 1
        </button>
    
        <div class="collapse navbar-collapse" id="ftco-nav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
    </li>
    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
      <a href="about.html" class="nav-link">About</a>
    </li>

    <!-- Danh mục xe -->
    <li class="nav-item dropdown {{ Request::is('category/*') ? 'active' : '' }}">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Danh mục xe
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach($categories as $category)
          <li class="dropdown-submenu {{ Request::is('category/'.$category->slug.'/*') ? 'active' : '' }}">
            <a class="dropdown-item dropdown-toggle" href="{{ route('category.product', ['slug' => $category->slug, 'id' => $category->id]) }}">
              {{ $category->name }}
            </a>
            @if ($category->children->count() > 0)
              <ul class="dropdown-menu">
                @foreach($category->children as $child)
                  <li class="{{ Request::is('category/'.$child->slug.'/*') ? 'active' : '' }}">
                    <a class="dropdown-item" href="{{ route('category.product', ['slug' => $child->slug, 'id' => $child->id]) }}">
                      {{ $child->name }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </li>

    <li class="nav-item {{ Request::is('pricing') ? 'active' : '' }}">
      <a href="pricing.html" class="nav-link">Pricing</a>
    </li>
    <li class="nav-item {{ Request::is('cars') ? 'active' : '' }}">
      <a href="{{ route('car') }}" class="nav-link">Cars</a>
    </li>
    <li class="nav-item {{ Request::is('blog') ? 'active' : '' }}">
      <a href="blog.html" class="nav-link">Blog</a>
    </li>
    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
      <a href="contact.html" class="nav-link">Contact</a>
    </li>
  </ul>
</div>
      </div>
    </nav>
        <!-- END nav -->