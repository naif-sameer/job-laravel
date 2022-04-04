@extends('layouts.web')

@section('title', 'contact us page')

@section('content')
  <!-- Contact us section -->
  <main>
    <div class="container-lg">
      <div class="mt-4">
        <div style="max-width: 500px" class="card mx-auto p-5 pb-3 shadow">
          <form class="row g-3" novalidate>
            <h1 class="col-12 text-primary h2 fw-bold">Contact us</h1>

            <div class="col-12">
              <div class="input-group flex-nowrap">
                <input type="text" class="form-control rounded-pill" placeholder="First Name" aria-label="fName"
                  aria-describedby="addon-wrapping" />
              </div>
            </div>

            <div class="col-4">
              <div class="input-group flex-nowrap">
                <select class="form-select rounded-pill" aria-label="Default select example">
                  <option selected>+967</option>
                  <option value="1">+1</option>
                  <option value="2">+966</option>
                  <option value="3">+102</option>
                </select>
              </div>
            </div>

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

            <!-- message -->
            <div class="col-12">
              <div class="input-group flex-nowrap">
                <textarea class="form-control rounded" cols="15" rows="5" placeholder="message..."></textarea>
              </div>
            </div>

            <button class="btn btn-primary w-100" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </main>

@endsection
