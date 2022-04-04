@extends('layouts.web')

@section('title', 'about us page')

@section('content')
  <main>
    <div class="container-lg">
      <!-- About Us Section -->
      <section class="mb-5">
        <header class="d-flex justify-content-center mb-lg-4 mt-5">
          <h1 class="text-primary fw-bold d-inline-block">About Us</h1>
        </header>

        <div>
          <div>
            <p class="fs-5">
              Job.com is Yemen’s national employment service, available as a
              website and mobile app. We help Yemenies find work and plan
              their careers, and we make it easier for employers to recruit
              and hire across the country.
            </p>
            <p class="fs-5">
              job.com strives to put job seekers first, giving them free
              access to search for jobs, post resumes, and research companies.
              Every day, we connect millions of people to new opportunities.
            </p>
          </div>
        </div>
      </section>

      <!-- Statistics Section -->
      <section class="pt-5">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
            <article class="card p-2">
              <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-primary fw-bold fs-2">100+</h1>
                <p class="text-black-50">Cv templates</p>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
            <article class="card p-2">
              <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-primary fw-bold fs-2">300+</h1>
                <p class="text-black-50">Companies</p>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
            <article class="card p-2">
              <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-primary fw-bold fs-2">2500</h1>
                <p class="text-black-50">Employs</p>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-2">
            <article class="card p-2">
              <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-primary fw-bold fs-2">16000000$</h1>
                <p class="text-black-50">Money</p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <hr class="mt-3" />

      <!-- Salary Section -->
      <section>
        <div class="container-fluid">
          <header class="d-flex justify-content-center mt-5">
            <h1 class="text-primary fw-bold d-inline-block">Our enjazat</h1>
          </header>

          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
              <!-- Single Salary -->
              <article class="card">
                <div class="card-title d-flex flex-column justify-content-center align-items-center m-0 gap-5 p-3">
                  <h3 class="mb-0">
                    <a class="text-primary fs-5" href="#">Monthly Salary Range</a>
                  </h3>
                  <p class="text-black-50 mb-0">$1,000 - 4,000</p>
                </div>
              </article>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-12 mt-4">
              <div class="row">
                <div class="col-6 mb-3">
                  <!-- Single Salary -->
                  <article class="card p-3">
                    <div class="card-title d-flex flex-column justify-content-center align-items-center m-0 gap-3">
                      <h3 class="mb-0">
                        <a class="text-primary fs-5" href="#">Monthly Salary Range</a>
                      </h3>
                      <p class="text-black-50 mb-0">$1,000-4,000</p>
                    </div>
                  </article>
                </div>
                <div class="col-6 mb-3">
                  <!-- Single Salary -->
                  <article class="card p-3">
                    <div class="card-title d-flex flex-column justify-content-center align-items-center m-0 gap-3">
                      <h3 class="mb-0">
                        <a class="text-primary fs-5" href="#">Monthly Salary Range</a>
                      </h3>
                      <p class="text-black-50 mb-0">$1,000-4,000</p>
                    </div>
                  </article>
                </div>
                <div class="col-6 mb-3">
                  <!-- Single Salary -->
                  <article class="card p-3">
                    <div class="card-title d-flex flex-column justify-content-center align-items-center m-0 gap-3">
                      <h3 class="mb-0">
                        <a class="text-primary fs-5" href="#">Monthly Salary Range</a>
                      </h3>
                      <p class="text-black-50 mb-0">$1,000-4,000</p>
                    </div>
                  </article>
                </div>

                <div class="col-6 mb-3">
                  <!-- Single Salary -->
                  <article class="card p-3">
                    <div class="card-title d-flex flex-column justify-content-center align-items-center m-0 gap-3">
                      <h3 class="mb-0">
                        <a class="text-primary fs-5" href="#">Monthly Salary Range</a>
                      </h3>
                      <p class="text-black-50 mb-0">$1,000-4,000</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection
