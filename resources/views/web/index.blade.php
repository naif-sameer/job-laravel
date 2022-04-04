@extends('layouts.web')

@section('title', 'home page')

@section('content')
  <div>

    <!-- hero section -->
    <section class="hero bg-primary">
      <div id="carouselExampleCaptions" class="carousel slide bg py-lg-5 py-4" data-bs-ride="carousel">
        <div class="container">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner px-3">
            <!-- item 1 -->
            <div class="carousel-item active" data-bs-interval="5000">
              <div class="row">
                <div
                  class="col-12 col-lg-7 col-md-7 col-sm-7 order-lg-1 order-md-1 order-sm-1 d-flex justify-content-center align-items-center order-2">
                  <div class="w-lg-75 w-md-75 p-lg-4 p-md-4 text-center">
                    <h1 class="mt-md-0 text-light fs-2 text-uppercase fw-bold mt-3">
                      Fast and Good job finder site
                    </h1>
                    <p class="text-white-50">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Iusto sunt rem eaque enim mollitia accusantium omnis
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-center col-12 col-lg-5 col-md-5 col-sm-5 order-sm-2 order-1">
                  <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_5zh17nif.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay>
                  </lottie-player>
                </div>
              </div>
            </div>

            <!-- item 2 -->
            <div class="carousel-item" data-bs-interval="5000">
              <div class="row">
                <div
                  class="col-12 col-lg-7 col-md-7 col-sm-7 order-lg-1 order-md-1 order-sm-1 d-flex justify-content-center align-items-center order-2">
                  <div class="w-lg-75 w-md-75 p-lg-4 p-md-4 text-center">
                    <h1 class="mt-md-0 text-light fs-2 text-uppercase fw-bold mt-3">
                      Best for small and large company
                    </h1>
                    <p class="text-white-50">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Iusto sunt rem eaque enim mollitia accusantium omnis
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-center col-12 col-lg-5 col-md-5 col-sm-5 order-sm-2 order-1">
                  <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_muiaursk.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay>
                  </lottie-player>
                </div>
              </div>
            </div>

            <!-- item 3 -->
            <div class="carousel-item" data-bs-interval="5000">
              <div class="row">
                <div
                  class="col-12 col-lg-7 col-md-7 col-sm-7 order-lg-1 order-md-1 order-sm-1 d-flex justify-content-center align-items-center order-2">
                  <div class="w-lg-75 w-md-75 p-lg-4 p-md-4 text-center">
                    <h1 class="mt-md-0 text-light fs-2 text-uppercase fw-bold mt-3">
                      Analyise data
                    </h1>
                    <p class="text-white-50">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Iusto sunt rem eaque enim mollitia accusantium omnis
                    </p>
                  </div>
                </div>
                <div class="d-flex justify-content-center col-12 col-lg-5 col-md-5 col-sm-5 order-sm-2 order-1">
                  <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_rysgr4xj.json"
                    background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay>
                  </lottie-player>
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- last job section-->
    <div class="find-job album bg-light py-5">
      <div class="container">
        <h2 class="mb-4 pb-2">Last Jobs</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/1.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/2.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-end align-items-center">
                  <small class="text-muted">7 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/3.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">4 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/4.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">25 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/5.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <div>
                <img class="card-img-top" src="assets/images/last-jobs/6.png" alt="" />
              </div>

              <div class="card-body">
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">16 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ads section -->
    <div class="ads container py-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
          <img src="assets/images/ads/1.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
          <img src="assets/images/ads/2.jpg" alt="" class="img-fluid" />
        </div>
      </div>
    </div>

    <!-- Partners section  -->
    <div>
      <div class="container">
        <h2 class="text-primary">Our Partners</h2>

        <div class="row align-items-center py-4">
          <div class="col">
            <img class="img-fluid partner-logo" src="assets/images/partners/apple.svg" alt="partners logo" />
          </div>
          <div class="col">
            <img class="img-fluid partner-logo" src="assets/images/partners/behance.svg" alt="partners logo" />
          </div>

          <div class="col">
            <img class="img-fluid partner-logo" src="assets/images/partners/facebook.svg" alt="partners logo" />
          </div>
          <div class="col">
            <img class="img-fluid partner-logo" src="assets/images/partners/microsoft.svg" alt="partners logo" />
          </div>
          <div class="col">
            <img class="img-fluid partner-logo" src="assets/images/partners/pizza.svg" alt="partners logo" />
          </div>
        </div>
      </div>
    </div>

    <!-- subscription to our email -->
    <form action="" class="bg-light">
      <div class="container mb-3 py-5">
        <label for="exampleFormControlInput1" class="form-label">Subscribe to our newsletter</label>

        <div class="input-group">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />

          <button type="button" class="bg-primary input-group-text text-white">
            subscribe
          </button>
        </div>
      </div>
    </form>
  </div>

@endsection
