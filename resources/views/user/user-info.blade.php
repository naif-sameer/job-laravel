@extends('layouts.user')

@section('title', 'user info page')

@section('content')
  <main class="container-lg mt-4" x-data="{ activeNav: 'index', user: {} }">
    <div class="row">
      @include('includes.user.sidebar')

      <!-- info Section -->
      <section class="col-lg-8 col-md-8 col-12">
        <div class="card p-3 shadow">
          <div class="card-header bg-transparent">
            <h1 class="fs-3 fw-bold text-primary">Info</h1>
          </div>

          @include('includes.alerts')

          <div class="card-body">

            <table class="mt-4 table">
              <thead>
                <tr class="text-capitalize">
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">phone</th>
                  <th scope="col">gender</th>
                  <th scope="col">birth_date</th>
                  <th scope="col">experience_id</th>
                  <th scope="col">description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                @if (isset($userInfos))
                  <!-- loop -->
                  @foreach ($userInfos as $user)
                    <tr>
                      <th scope="row">{{ $user->id }}</th>

                      <td> {{ $user->name }}</td>
                      <td> {{ $user->phone }}</td>
                      <td> {{ $user->gender }}</td>
                      <td> {{ $user->birth_date }}</td>
                      <td> {{ $user->experience_id }}</td>
                      <td> {{ $user->description }}</td>

                      {{-- actions --}}
                      <td>
                        <div>
                          {{-- edit --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-modal"
                            @click=" user = {{ $user }}">
                            <i class="fa fa-pencil-alt text-secondary"></i>
                          </button>

                          {{-- delete --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#delete"
                            @click=" user = {{ $user }}">
                            <i class="fa fa-trash text-danger"></i>
                          </button>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>

          {{-- <div class="card-body">
            <div class="row">
              <!-- image -->
              <div class="col-md-3">
                <div class="d-flex justify-content-center align-items-center">
                  <div class="position-relative">
                    <img src="/assets/images/avatar.jpg" class="user-avatar rounded-circle" alt="" />

                    <!-- edit image -->
                    <button data-bs-toggle="modal" data-bs-target="#avatar-edit-model"
                      class="position-absolute btn bg-primary rounded-circle text-white" style="bottom: 0; left: 0">
                      <i class="fa fa-pencil-alt"></i>
                    </button>
                  </div>
                </div>
              </div>

              <!-- form -->
              <div class="col-12 col-md-8 mt-md-0 mt-3">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-6">
                    <!-- first name -->
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill" placeholder="First Name" aria-label="fName"
                        aria-describedby="addon-wrapping" required value="Ali" />
                    </div>
                  </div>

                  <!-- last name -->
                  <div class="col-6">
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill" placeholder="Last Name" aria-label="lName"
                        aria-describedby="addon-wrapping" required value="Ahmed" />
                    </div>
                  </div>

                  <!-- phone code -->
                  <div class="col-4">
                    <div class="input-group">
                      <select class="form-select rounded-pill" aria-label="Default select example" required>
                        <option selected>+05</option>
                        <option value="1">+01</option>
                        <option value="2">+103</option>
                        <option value="3">+966</option>
                      </select>
                    </div>
                  </div>

                  <!-- phone number -->
                  <div class="col-8">
                    <div class="input-group">
                      <input type="text" class="form-control rounded-pill" placeholder="Phone Number" aria-label="phone"
                        aria-describedby="addon-wrapping" required value="123456789" />
                    </div>
                  </div>

                  <!-- email -->
                  <div class="col-12">
                    <div class="input-group">
                      <input type="email" class="form-control rounded-pill" placeholder="Email" aria-label="email"
                        aria-describedby="addon-wrapping" required value="ali-ahmed.adim@JoJo.com" />
                    </div>
                  </div>

                  <!-- gender -->
                  <div class="col-6">
                    <div class="input-group">
                      <select class="form-select rounded-pill" aria-label="Default select example" required>
                        <option disabled>Gender</option>
                        <option value="1">Female</option>
                        <option selected value="2">Male</option>
                        <option value="3">Other</option>
                      </select>
                    </div>
                  </div>

                  <!-- date -->
                  <div class="col-6">
                    <div class="input-group">
                      <input type="date" class="form-control rounded-pill" value="2001-06-04" />
                    </div>
                  </div>

                  <!-- save btn -->
                  <div class="col-12 mt-5">
                    <button class="btn bg-primary d-block w-100 rounded-pill text-white" type="submit">
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div> --}}
        </div>
      </section>
    </div>
  </main>

  <!-- Edit user avatar image model -->
  <div class="modal fade" id="avatar-edit-model" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <!-- model header -->
        <div class="modal-header">
          <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
            Edit image profile
          </h4>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- model body -->
        <div class="modal-body">
          <form class="g-3">
            <div class="input-group mb-3">
              <input type="file" class="form-control" id="inputGroupFile02" />
            </div>
          </form>
        </div>

        <!-- model footer -->
        <div class="modal-footer">
          <button type="button" class="btn bg-primary text-white">
            update
          </button>
        </div>
      </div>
    </div>
  </div>

@endsection
