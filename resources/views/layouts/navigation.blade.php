<header class="sticky-top p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-md-between col-12">
      <div class="d-flex justify-content-md-around">
        <div>
          <a href="/" class="d-flex justify-content-center align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">CAMPING FUN</span>
          </a>
          
        </div>

      </div>  
      <div class="d-flex justify-content-md-end">
        <div>
          <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-4 mb-md-0 justify-content-center">
          <li><a aria-current="page" href="/" class="nav-link px-2 text-white{{ request()->is('/') ? ' active' : '' }}">HOME</a></li>
          <li><a href="/equipments-main" class="nav-link px-2 text-white{{ request()->is('equipments-main') ? ' active' : '' }}">MAIN EQUIPMENTS</a></li>
          <li><a href="/equipments-dine" class="nav-link px-2 text-white{{ request()->is('equipments-dine') ? ' active' : '' }}">DINE EQUIPMENTS</a></li>
          <li><a href="/equipments-support" class="nav-link px-2 text-white{{ request()->is('equipments-support') ? ' active' : '' }}">HELP & SUPPORT EQUIPMENTS</a></li>
          <li><a href="/pricelist" class="nav-link px-2 text-white{{ request()->is('pricelist') ? ' active' : '' }}">PRICE LIST</a></li>
          <li><a href="/faqs" class="nav-link px-2 text-white{{ request()->is('faqs') ? ' active' : '' }}">FAQs</a></li>
          </ul>
        </div>
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Sign-in</button>
          <button type="button" class="btn btn-outline-warning me-2">Sign-Up</button>
        </div>
      </div>
    </div>
  </div>
</header>
