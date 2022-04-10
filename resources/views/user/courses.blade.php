@extends('layouts.user')

@section('title', 'courses page')

@section('content')
  <main class="container-lg mt-4" x-data="{ activeNav: 'courses' }">
    <div class="row">
      @include('includes.user.sidebar')

      <!-- Experience section -->
      <section class="col-lg-8 col-md-8 col-12">
        <div class="card p-3">
          <header class="card-header bg-transparent">
            <h3 class="fw-bold text-primary">Courses</h3>
          </header>

          <div class="card-body">
            <div class="row">
              <!-- experience 1 -->
              <div class="col-12 mb-5">
                <div class="p-3 shadow-sm">
                  <a href="#">
                    <h4>Front end</h4>
                  </a>

                  <div class="text-black-50 fs-6 d-flex flex-column">
                    <span>From 2019 to 2021</span>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Itaque, velit!
                    </p>
                  </div>
                </div>
              </div>

              <!-- experience 2 -->
              <div class="col-12 mb-5">
                <div class="p-3 shadow-sm">
                  <a href="#">
                    <h4>Back end</h4>
                  </a>

                  <div class="text-black-50 fs-6 d-flex flex-column">
                    <span>2021 to 2022</span>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Itaque, velit!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>

@endsection
