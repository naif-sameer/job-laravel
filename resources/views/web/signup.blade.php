@extends('layouts.web')

@section('title', 'signup page')

@section('content')
  <main>
    <div class="mx-auto mt-5" style="max-width: 500px">
      <div class="row">
        <div class="card p-5 pb-3 shadow" style="
                          background-color: rgba(255, 255, 255, 0.9);
                          backdrop-filter: blur(6px);
                        ">
          <form class="row g-3" novalidate>
            <h1 class="col-12 text-primary fw-bold">Sign up</h1>

            <!-- first name -->
            <div class="col-6">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control rounded-pill" placeholder="First Name" aria-label="fName"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <!-- last name -->
            <div class="col-6">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control rounded-pill" placeholder="Last Name" aria-label="lName"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <!-- phone code -->
            <div class="col-4">
              <div class="input-group flex-nowrap">
                <select class="form-select rounded-pill" aria-label="Default select example">
                  <option selected>+966</option>
                  <option value="1">+01</option>
                  <option value="2">+911</option>
                  <option value="3">+103</option>
                </select>
              </div>
            </div>

            <!-- phone number -->
            <div class="col-8">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control rounded-pill" placeholder="Phone Number" aria-label="phone"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <!-- email -->
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="email" class="form-control rounded-pill" placeholder="Email" aria-label="email"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <!-- password -->
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="password" class="form-control rounded-pill" placeholder="Password" aria-label="password"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <button class="btn btn-primary mt-4" type="button">
              Sign in
            </button>

            <p class="fs-sm mb-0 pt-3">
              Already have an account?
              <a href="login" class="fw-medium">Sign in</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
