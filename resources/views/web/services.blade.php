@extends('layouts.web')

@section('title', 'services page')

@section('content')
  <!-- our services -->
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="border-bottom pb-2">Our services</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/1.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5 text-white">
            <h2 class="fw-bold mt-5">Ux/Ui</h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/2.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5">
            <h2 class="fw-bold mt-5">Mobile development</h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/3.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5 text-white">
            <h2 class="fw-bold mt-5">Web design</h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/4.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5 text-white">
            <h2 class="fw-bold mt-5">Web design</h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/5.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5 text-white">
            <h2 class="fw-bold mt-5">Ux/Ui</h2>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 bg-dark rounded-5 overflow-hidden text-white shadow-lg"
          style="background-image: url('/assets/images/services/6.jpg')">
          <div class="d-flex align-items-end h-100 text-shadow-1 flex-row p-5 py-5">
            <h2 class="fw-bold mt-5">Mobile development</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
