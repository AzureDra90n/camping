{{-- <div class="container">
  <header class="navbar fixed-top d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark text-white">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none text-white">
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
</div> --}}

<header class="sticky-top p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end">
      <a href="/" class="d-flex justify-content-center align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">CAMPING FUN</span>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-4 mb-md-0 justify-content-center">
        <li><a aria-current="page" href="/" class="nav-link px-2 text-white{{ request()->is('/') ? ' active' : '' }}">HOME</a></li>
        <li><a href="/equipments-main" class="nav-link px-2 text-white{{ request()->is('Main Equipments') ? ' active' : '' }}">MAIN EQUIPMENTS</a></li>
        <li><a href="/equipments-dine" class="nav-link px-2 text-white{{ request()->is('Dine Equipments') ? ' active' : '' }}">DINE EQUIPMENTS</a></li>
        <li><a href="/equipments-support" class="nav-link px-2 text-white{{ request()->is('Support Equipments') ? ' active' : '' }}">HELP & SUPPORT EQUIPMENTS</a></li>
        <li><a href="/pricelist" class="nav-link px-2 text-white{{ request()->is('Price List') ? ' active' : '' }}">PRICE LIST</a></li>
        <li><a href="/faqs" class="nav-link px-2 text-white{{ request()->is('Faqs') ? ' active' : '' }}">FAQs</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form>

      <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Sign-in</button>
        <button type="button" class="btn btn-outline-warning me-2">Sign-Up</button>
      </div>
    </div>
  </div>
</header>
