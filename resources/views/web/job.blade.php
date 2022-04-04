@extends('layouts.web')

@section('title', 'jobs page')

@section('content')
  <main class="job-page">
    <div class="container-lg">
      <div class="row pt-4">
        <!-- header of page -->
        <header class="col-12 d-flex justify-content-between align-items-center my-3">
          <h1 class="fw-bold">Find Job</h1>
        </header>

        <!-- Filter Section -->
        <div class="col-lg-4 col-md-4 col-sm-12 mb-sm-3 card p-3 shadow">
          <div class="card-header mb-4 bg-transparent">
            <h1 class="fs-4 fw-bold text-primary">
              <i class="bi bi-funnel fs-5"></i>
              <span>Filter</span>
            </h1>
          </div>
          <form class="d-flex flex-column gap-3">
            <div class="col-12 input-group position-relative flex-nowrap">
              <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 999; margin-right: 14px">
                <i class="bi bi-search text-black-50"></i>
              </div>
              <input type="search" id="search-key" class="form-control rounded-pill" placeholder="search"
                aria-label="email" aria-describedby="addon-wrapping" />
            </div>
          </form>
        </div>

        <!-- All Job Section -->
        <section class="col-lg-8 col-md-8 col-sm-12">
          <!-- Job 1 -->
          <article class="card p-lg-3 p-md-2 search-job mb-3 p-1 shadow-sm" role="button">
            <div class="card-title d-flex justify-content-between align-items-center m-0">
              <div class="s px-2">
                <h3 class="mb-0">
                  <a class="text-primary fs-5 fw-bold" href="detailsJob">Front end dev</a>
                </h3>
                <a class="text-secondary fs-5 fw-bold mb-0" href="#">Ali company
                  <span class="fw-light fs-6">- Al Kuwait</span></a>
              </div>

              <div class="d-flex justify-content-center job-logo mt-2 ml-5 rounded p-1 shadow-sm">
                <img class="img-fluid" src="/assets/images/jobs/logo.png" width="100%" alt="microsoft" />
              </div>
            </div>
            <div class="card-body p-md-2">
              <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                <div class="col-12 fs-7">
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-briefcase text-primary"></i>
                      <span class="text-secondary">Entry Level</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-hourglass text-primary"></i>
                      <span class="text-secondary">Full-time</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-cash-stack text-primary"></i>
                      <span class="text-secondary">$2000 - $1000</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-clock text-primary"></i>
                      <span class="text-secondary">Feb 01</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2">
                <a href="detailsJob">
                  <p class="fw-light fs-6 text-secondary">
                    As a sales / senior sales executive, you will be working
                    as part of our sales team in order to create a pleasant
                    shopping experience for our customers, create a positive
                    workplace environmen
                  </p>
                </a>
              </div>
            </div>
          </article>
          <!-- Job  2 -->
          <article class="card p-lg-3 p-md-2 search-job mb-3 p-1 shadow-sm" role="button">
            <div class="card-title d-flex justify-content-between align-items-center m-0">
              <div class="s px-2">
                <h3 class="mb-0">
                  <a class="text-primary fs-5 fw-bold" href="detailsJob">Back end dev</a>
                </h3>
                <a class="text-secondary fs-5 fw-bold mb-0" href="#">Super ABC <span class="fw-light fs-6">-
                    Dubai</span></a>
              </div>
              <div class="d-flex justify-content-center job-logo mt-2 ml-5 rounded p-1 shadow-sm">
                <img class="img-fluid" src="/assets/images/jobs/logo.png" width="100%" alt="360nautica" />
              </div>
            </div>
            <div class="card-body p-md-2">
              <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                <div class="col-12 fs-7">
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-briefcase text-primary"></i>
                      <span class="text-secondary">Mid Career</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-hourglass text-primary"></i>
                      <span class="text-secondary">Full-time</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-cash-stack text-primary"></i>
                      <span class="text-secondary">$500 - $1000</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-clock text-primary"></i>
                      <span class="text-secondary">Feb 01</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2">
                <a href="detailsJob">
                  <p class="fw-light fs-6 text-secondary">
                    As a sales / senior sales executive, you will be working
                    as part of our sales team in order to create a pleasant
                    shopping experience for our customers, create a positive
                    workplace environmen
                  </p>
                </a>
              </div>
            </div>
          </article>
          <!-- Job 3 -->
          <article class="card p-lg-3 p-md-2 search-job mb-3 p-1 shadow-sm" role="button">
            <div class="card-title d-flex justify-content-between align-items-center m-0">
              <div class="px-2">
                <h3 class="mb-0">
                  <a class="text-primary fs-5 fw-bold" href="detailsJob">Teachers</a>
                </h3>
                <a class="text-secondary fs-5 fw-bold mb-0" href="#">Hammod school
                  <span class="fw-light fs-6">- Yemen
                  </span></a>
              </div>
              <div class="d-flex justify-content-center job-logo mt-2 ml-5 rounded p-1 shadow-sm">
                <img class="img-fluid" src="/assets/images/jobs/logo.png" width="100%" alt="rawabiHolding" />
              </div>
            </div>
            <div class="card-body p-md-2">
              <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                <div class="col-12 fs-7">
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-briefcase text-primary"></i>
                      <span class="text-secondary"> Senior Executive</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-hourglass text-primary"></i>
                      <span class="text-secondary">part-time</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-clock text-primary"></i>
                      <span class="text-secondary">Feb 01</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2">
                <a href="detailsJob">
                  <p class="fw-light fs-6 text-secondary">
                    The main purpose of the Area Sales Manager job is to be
                    responsible for implementing the company's
                  </p>
                </a>
              </div>
            </div>
          </article>
          <!-- Job 4 -->
          <article class="card p-lg-3 p-md-2 search-job mb-3 p-1 shadow-sm" role="button">
            <div class="card-title d-flex justify-content-between align-items-center m-0">
              <div class="px-2">
                <h3 class="mb-0">
                  <a class="text-primary fs-5 fw-bold" href="detailsJob">Super man</a>
                </h3>
                <a class="text-secondary fs-5 fw-bold mb-0" href="#">Heros <span class="fw-light fs-6">-
                    Sanaa</span></a>
              </div>
              <div class="d-flex justify-content-center job-logo mt-2 ml-5 rounded p-1 shadow-sm">
                <img class="img-fluid" src="/assets/images/jobs/logo.png" width="100%" alt="PROVEN" />
              </div>
            </div>
            <div class="card-body p-md-2">
              <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                <div class="col-12 fs-7">
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-briefcase text-primary"></i>
                      <span class="text-secondary">Mid Career</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-hourglass text-primary"></i>
                      <span class="text-secondary">Full-time</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-cash-stack text-primary"></i>
                      <span class="text-secondary">$500 - $1000</span>
                    </a>
                  </div>
                  <div class="d-inline-block px-1">
                    <a href="detailsJob">
                      <i class="bi bi-clock text-primary"></i>
                      <span class="text-secondary">Feb 01</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="my-2">
                <a href="detailsJob">
                  <p class="fw-light fs-6 text-secondary">
                    Experience in data warehousing, ETL, and data modeling
                    Experience working with SQL and NoSQL databases Experience
                    with data modeling…
                  </p>
                </a>
              </div>
            </div>
          </article>

          <footer>
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </footer>
        </section>
      </div>
    </div>
  </main>

@endsection
