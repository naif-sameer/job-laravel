@extends('layouts.user')

@section('title', 'experience page')

@section('content')
  <main class="container-lg mt-4" x-data="{ activeNav: 'experiences', experience: {} }">
    <div class="row">
      @include('includes.user.sidebar')

      <!-- Experience section -->
      <section class="col-lg-8 col-md-8 col-12">
        <div class="card p-3">
          <header class="card-header d-flex justify-content-between align-items-center bg-transparent">
            <h3 class="fw-bold text-primary">Experience</h3>

            <a role="button" data-bs-toggle="modal" data-bs-target="#add-experience">
              <i class="fa fa-plus fw-bold fs-5 text-primary"></i>
            </a>
          </header>

          @include('includes.alerts')


          <div class="card-body">
            <div class="row">
              @if (isset($experiences))

                <!-- loop -->
                @foreach ($experiences as $experience)
                  <div class="col-12 mb-5">
                    <div class="p-3 shadow-sm">
                      <div class="d-flex justify-content-between align-items-center">
                        <h4>{{ $experience->title }}</h4>

                        <div>
                          {{-- edit --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal"
                            data-bs-target="#edit-experience" @click="experience = {{ $experience }}">
                            <i class="fa fa-pencil-alt text-secondary"></i>
                          </button>

                          {{-- delete --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#delete"
                            @click="experience = {{ $experience }}">
                            <i class="fa fa-trash text-danger"></i>
                          </button>
                        </div>
                      </div>

                      <div class="text-black-50 fs-6 d-flex flex-column">
                        <span>{{ $experience->country }}</span>
                        <span>{{ $experience->work_time }}</span>
                        <p>{{ $experience->description }}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- modals -->
    <div class="container">
      <!-- add experience Modal  -->
      <div class="modal fade" id="add-experience" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Add experience
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form action="experiences" method="post" class="row g-3">
                @csrf

                <div>
                  <label class="ms-3" for="input-title-label-id">Title</label>
                  <input id="input-title-label-id" type="text" class="form-control rounded-pill" name="title"
                    placeholder="experience" required />
                </div>

                <div>
                  <label class="ms-3" for="input-country-label-id">Country</label>
                  <input id="input-country-label-id" type="text" class="form-control rounded-pill" name="country"
                    placeholder="country" required />
                </div>

                <div>
                  <label class="ms-3" for="input-work-time-label-id">Work time</label>
                  <input id="input-work-time-label-id" type="text" class="form-control rounded-pill" name="work_time"
                    placeholder="work_time" required />
                </div>

                <div>
                  <textarea class="form-control" name="description" rows="3" placeholder="description"></textarea>
                </div>

                <button type="submit" class="btn bg-primary text-white">
                  add
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- edit experience Modal  -->
      <div class="modal fade" id="edit-experience" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Edit experience
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form action="experiences" method="post" class="row g-3">
                @csrf
                <input type="hidden" class="js-edit-modal-id" name="experience_id" />

                {{-- title --}}
                <div>
                  <label class="ms-3" for="input-edit-title-label-id">Title</label>
                  <input x-bind:value="experience.title" id="input-edit-title-label-id" type="text"
                    class="form-control rounded-pill js-edit-modal-title" name="title" placeholder="experience"
                    required />
                </div>

                {{-- country --}}
                <div>
                  <label class="ms-3" for="input-edit-country-label-id">Country</label>
                  <input x-bind:value="experience.country" id="input-edit-country-label-id" type="text"
                    class="form-control rounded-pill js-edit-modal-country" name="country" placeholder="country"
                    required />
                </div>

                {{-- work time --}}
                <div>
                  <label class="ms-3" for="input-edit-work-time-label-id">Work time</label>
                  <input x-bind:value="experience.work_time" id="input-edit-work-time-label-id" type="text"
                    class="form-control rounded-pill js-edit-modal-work_time" name="work_time" placeholder="work_time"
                    required />
                </div>

                {{-- description --}}
                <div>
                  <textarea class="form-control js-edit-modal-description" name="description" rows="3" placeholder="description"
                    x-text="experience.description"></textarea>
                </div>

                <button type="submit" class="btn bg-primary text-white">
                  Edit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete experience modal -->
      <div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body fw-bold d-flex justify-content-lg-center align-items-center flex-column">
              <i class="bi bi-exclamation-circle fs-1 text-danger"></i>
              <h3 class="fs-4">Do you want to delete?</h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                No
              </button>

              <form x-bind:action="'experiences/' + experience.id" method="post">
                @csrf
                @method('delete')

                <input type="hidden" name="experience_id" id="delete-modal-id" />

                <button type="submit" data-bs-dismiss="modal" class="btn btn-danger">
                  Yes
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>



@endsection
