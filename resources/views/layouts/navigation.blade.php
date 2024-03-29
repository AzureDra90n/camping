<header class="sticky-top p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-md-between col-12">
      <div class="d-flex justify-content-md-around">
        <div>
          <a href="/" class="d-flex justify-content-center align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">ALMENT CAMPING</span>
          </a>
          
        </div>

      </div>  
      <div class="d-flex justify-content-md-end">
        <div>
          <ul class="nav nav-pills col-12 col-lg-auto me-lg-auto mb-4 mb-md-0 justify-content-center">
          <li><a aria-current="page" href="/" class="nav-link px-2 text-white{{ request()->is('/') ? ' active' : '' }}">HOME</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link px-2 text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              EQUIPMENTS
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a href="/equipments-main" class="nav-link px-2 text-dark{{ request()->is('equipments-main') ? ' active' : '' }}">Main Equipments</a></li>
              <li><a href="/equipments-dine" class="nav-link px-2 text-dark{{ request()->is('equipments-dine') ? ' active' : '' }}">Dine Equipments</a></li>
              <li><a href="/equipments-support" class="nav-link px-2 text-dark{{ request()->is('equipments-support') ? ' active' : '' }}">Support Equipments</a></li>
            </ul>
          </li>

          <li><a href="/pricelist" class="nav-link px-2 text-white{{ request()->is('pricelist') ? ' active' : '' }}">PRICE LIST</a></li>
          <li><a href="/faqs" class="nav-link px-2 text-white{{ request()->is('faqs') ? ' active' : '' }}">FAQs</a></li>
          </ul>
        </div>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModalSignin">Sign-in</button>
          <button type="button" class="btn btn-outline-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModalSignup">Sign-Up</button>
        </div>
        
      </div>
    </div>
  </div>
</header>

{{-- Modal Sign-in  --}}
<div class="modal fade" id="exampleModalSignin" tabindex="-1" aria-labelledby="exampleModalLabelSignin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelSignin">SIGN IN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Sign In</button>
      </div>

    </div>

  </div>

</div>

{{-- Modal Sign-up  --}}
<div class="modal fade" id="exampleModalSignup" tabindex="-1" aria-labelledby="exampleModalLabelSignup" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelSignup">SIGN UP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>

      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Sign Up</button>
      </div>

    </div>

  </div>

</div>