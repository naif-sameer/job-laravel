@extends('layouts.web')

@section('title', 'login page')

@section('content')
  <main>
    <div class="mx-auto mt-5" style="max-width: 500px">
      <div class="card p-5 shadow" style="
                background-color: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(6px);
              ">
        <form class="row g-3 needs-validation" novalidate>
          <div class="col-12">
            <h1 class="text-primary fw-bold">Login</h1>
          </div>

          <div class="col-12 input-group">
            <input type="email" class="form-control rounded-pill pl" placeholder="Email" aria-label="email"
              aria-describedby="addon-wrapping" />
          </div>

          <div class="col-12 input-group">
            <input type="password" class="form-control rounded-pill pl" placeholder="Password" aria-label="password"
              aria-describedby="addon-wrapping" />
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3 mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="keep-signed" />
              <label class="form-check-label fs-sm" for="keep-signed">Keep me Login</label>
            </div>

            <a class="link-primary fs-ms" href="password-recovery">Forgot password?</a>
          </div>
          <button class="btn btn-primary d-block w-100" type="submit">
            Login
          </button>

          <p class="fs-sm mb-0 pt-3">
            Don't have an account?
            <a href="signup" class="fw-medium link-primary"> Sign up </a>
          </p>
        </form>
      </div>
    </div>
  </main>

@endsection
