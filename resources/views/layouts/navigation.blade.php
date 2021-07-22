<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">CAMPING FUN</span>
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item"><a class="nav-link{{ request()->is('/') ? ' active' : '' }}" aria-current="page" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link{{ request()->is('admin') ? ' active' : '' }}" href="/admin">Admin</a></li>
      <li class="nav-item"><a class="nav-link{{ request()->is('customer') ? ' active' : '' }}" href="/customer">Customer</a></li>
      <li class="nav-item"><a class="nav-link{{ request()->is('about') ? ' active' : '' }}" href="/about">About Us</a></li>
    </ul>
  </header>
</div>
