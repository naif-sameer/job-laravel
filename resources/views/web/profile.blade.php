@extends('layouts.web')

@section('title', 'profile page')

@section('content')
  <main>
    <div class="container-lg">
      <!-- user avatar -->
      <div class="d-flex justify-content-center align-items-center flex-column mt-4" style="height: 40vh">
        <figure class="d-flex justify-content-center">
          <img src="/assets/images/avatar.jpg" class="user-avatar img-fluid rounded-circle" alt="user avatar" />
        </figure>
        <h1 class="text-primary fs-2">Ali Ahmed JoJo</h1>

        <p class="text-secondary fw-bold">/* Front end developer */</p>
      </div>

      <div class="row">
        <div class="col-12 col-lg-5 mb-4">
          <div class="row">
            <!-- Contact info -->
            <div class="col-12 card p-3">
              <header class="card-header bg-transparent">
                <h2 class="text-primary fs-4">Contact info</h2>
              </header>

              <div class="card-body">
                <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                  <h4 class="fs-6 fw-bold">Email:</h4>
                  <span class="text-secondary"> ali.admin@JoJo.com </span>
                </div>

                <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                  <h4 class="fs-6 fw-bold">Phone Number:</h4>
                  <span class="text-secondary">966 123456</span>
                </div>
              </div>
            </div>

            <!-- Personal info -->
            <div class="col-12 mt-4 p-0">
              <div class="card p-3">
                <header class="card-header bg-transparent">
                  <h1 class="text-primary fs-4">Personal info</h1>
                </header>

                <div class="card-body">
                  <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                    <h4 class="fs-6 fw-bold">Birth date</h4>
                    <span class="text-secondary">4 June 2001</span>
                  </div>

                  <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                    <h4 class="fs-6 fw-bold">Country:</h4>
                    <span class="text-secondary">Japan</span>
                  </div>

                  <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                    <h4 class="fs-6 fw-bold">Nationality</h4>
                    <span class="text-secondary">Japanize</span>
                  </div>

                  <div class="d-flex justify-content-between border-bottom mb-3 pb-1">
                    <h4 class="fs-6 fw-bold">Gender</h4>
                    <span class="text-secondary">Male</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Skills section -->
            <div class="col-12 mt-4 p-0">
              <div class="card p-3">
                <header class="card-header bg-transparent">
                  <h1 class="text-primary fs-4">Skills:</h1>
                </header>

                <div class="card-body p-0">
                  <div class="row">
                    <!--  skill 1 -->
                    <div class="col-12 mb-2">
                      <div class="p-3 shadow-sm">
                        <h5>Web development</h5>

                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            100%
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--  skill 2 -->
                    <div class="col-12 mb-2">
                      <div class="p-3 shadow-sm">
                        <h5>Database</h5>

                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            100%
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--  skill 3 -->
                    <div class="col-12 mb-2">
                      <div class="p-3 shadow-sm">
                        <h5>Team player</h5>

                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            100%
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--  skill 4 -->
                    <div class="col-12 mb-2">
                      <div class="p-3 shadow-sm">
                        <h5>Generous</h5>

                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">
                            100%
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-7 mb-4">
          <div class="row">
            <!-- About -->
            <div class="col-12">
              <div class="card p-3">
                <header class="card-header bg-transparent">
                  <h1 class="text-primary fs-4">About:</h1>
                </header>

                <div class="card-body">
                  <p class="text-secondary">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Porro ut reiciendis provident sint expedita quisquam neque
                    necessitatibus magni consequuntur praesentium rem optio
                    quas itaque laudantium repellendus facere est dolor,
                    consequatur laboriosam debitis iure, obcaecati veritatis
                    commodi delectus? Omnis, accusantium nulla?
                  </p>

                  <p class="text-secondary">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Nihil repellat delectus, accusantium laboriosam eligendi
                    vero consectetur harum soluta autem aperiam!
                  </p>
                </div>
              </div>
            </div>

            <!-- Education section -->
            <div class="col-12 mt-4">
              <div class="card p-3">
                <header class="card-header bg-transparent">
                  <h1 class="text-primary fs-4">Education:</h1>
                </header>

                <div class="card-body">
                  <!-- experience 1 -->
                  <div class="col-12 mb-5">
                    <div class="p-3 shadow-sm">
                      <a href="#">
                        <h4>
                          <b>Front end</b>
                          <span class="fs-5">W3school</span>
                        </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                        <h6 class="text-black">Youtube</h6>
                        <span>July 2021</span>
                      </a>
                    </div>
                  </div>

                  <!--  experience  2-->
                  <div class="col-12 mb-5">
                    <div class="p-3 shadow-sm">
                      <a href="#">
                        <h4>
                          <b>Back end</b>
                          <span class="fs-5">W4school</span>
                        </h4>
                      </a>

                      <a href="#" class="text-black-50 fs-6 d-flex flex-column">
                        <h6 class="text-black">Youtube</h6>
                        <span>March 2022</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Experience section -->
            <div class="col-12 mt-4">
              <div class="card p-3">
                <header class="card-header bg-transparent">
                  <h1 class="text-primary fs-4">Experience</h1>
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
                          <span>US</span>
                          <span>From 2019 to 2021</span>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, velit!
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
                          <span>Yemen</span>
                          <span>2021 to 2024</span>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, velit!
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
