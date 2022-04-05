@extends('layouts.dashboard')

@section('title', 'courses page')

@section('content')
  <main class="container-lg mt-4">
    <div class="row">
      <!-- Dashboard Nav Section -->
      <div class="col-lg-4 col-md-4 col-12 mb-3">
        <div class="card p-3 pt-0 shadow">
          <!-- user avatar -->
          <div class="col-12 d-flex justify-content-center align-items-center position-relative p-4">
            <img src="/assets/images/avatar.jpg" class="user-avatar img-fluid rounded-circle" alt="user avatar" />
          </div>

          <!-- name -->
          <div class="text-center">
            <a class="text-primary fs-4 fw-bold" href="">Ali Ahmed</a>
            <p>Front end Developer</p>
          </div>

          <!-- dashboard nav -->
          <nav class="card d-flex mt-3 gap-3 px-3 py-4">
            <!-- info -->
            <a href="user-info" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
              <i class="fa fa-user pe-2"></i>
              <span class="fs-6 fw-bold">Info</span>
            </a>

            <!-- skills -->
            <a href="skills" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
              <i class="fa fa-shekel-sign pe-2"></i>
              <span class="fs-6 fw-bold">Skills</span>
            </a>

            <!-- experience -->
            <a href="experience" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
              <i class="fa fa-object-group pe-2"></i>
              <span class="fs-6 fw-bold">Experience</span>
            </a>

            <!-- education -->
            <a href="education" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
              <i class="fa fa-book pe-2"></i>
              <span class="fs-6 fw-bold">Education</span>
            </a>

            <!-- Courses -->
            <a href="courses" class="text-primary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
              <i class="fa fa-paperclip pe-2"></i>
              <span class="fs-6 fw-bold">Courses</span>
            </a>
          </nav>
        </div>
      </div>

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
