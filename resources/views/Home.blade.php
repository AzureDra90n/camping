@extends('layouts.app')

@section('title', 'CAMPING FUN | Home')

@section('content')
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('/img/Carousel1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>SLEEP UNDER THE STARS</h5>
                  <p>Everything You Need for the Perfect Adventure Experience.</p>
                </div>
          </div>

          <div class="carousel-item">
              <img src="{{ asset('/img/Carousel2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>START PLANNING YOUR NEXT ADVENTURE</h5>
                  <p>Our Equipments for Support Your Unforgetable Adventure Experience.</p>
                </div>
          </div>

          <div class="carousel-item">
              <img src="{{ asset('/img/Carousel3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>GET READY FOR THE BIG CHILL</h5>
                  <p>We Also Provide Help, Support and Eatery Equipments for Complete Your Adventure.</p>
                </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Card Section -->
    <div class="mt-3 row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-md-between">
      <div class="col d-flex justify-content-md-center align-items-md-center">
        <div class="card border-dark h-100" style="max-width: 19rem">
          <img src="{{ asset('/img/main-equipment.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MAIN EQUIPMENT</h5>
                <p class="card-text">You can find and rent main equipment you need such as Tents, Flysheet, Mattress, Carrier, Sleeping Bag, and Shoes.</p>
            </div>
        </div>
      </div>

      <div class="col d-flex justify-content-md-center align-items-md-center">
        <div class="card border-dark h-100" style="max-width: 19rem">
            <img src="{{ asset('/img/nesting-equipment.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NESTING EQUIPMENT</h5>
                <p class="card-text">Time to make some delicacy to fill out our stomach before we catch some cold, with some nesting equipment ofcourse.</p>
            </div>
        </div>
      </div>

      <div class="col d-flex justify-content-md-center align-items-md-center">
        <div class="card card border-dark h-100" style="max-width: 19rem">
          <img src="{{ asset('/img/support-equuipment.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SUPPORT EQUIPMENT</h5>
                <p class="card-text">Support equipment that help and make us easy in our adventure.</p>
            </div>
        </div>

      </div>

    </div>

  </div>
@endsection