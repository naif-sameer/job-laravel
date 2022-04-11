@extends('layouts.user')

@section('title', 'courses page')

@section('content')
  <main class="container-lg mt-4" x-data="{ activeNav: 'courses', course: {} }">
    <div class="row">
      @include('includes.user.sidebar')

      <!-- course section -->
      <section class="col-lg-8 col-md-8 col-12">
        <div class="card p-3">
          <header class="card-header d-flex justify-content-between align-items-center bg-transparent">

            <h3 class="fw-bold text-primary">Courses</h3>

            <a role="button" data-bs-toggle="modal" data-bs-target="#add-modal">
              <i class="fa fa-plus fw-bold fs-5 text-primary"></i>
            </a>
          </header>

          @include('includes.alerts')

          <div class="card-body">
            <div class="row">
              @if (isset($courses))
                <!-- loop -->
                @foreach ($courses as $course)
                  <div class="col-12 mb-2">
                    <div class="p-3 shadow-sm">
                      <div class="d-flex justify-content-between mb-2">
                        <h5>{{ $course->title }}</h5>

                        {{-- actions --}}
                        <div>
                          {{-- edit --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-modal"
                            @click=" course = {{ $course }}">
                            <i class="fa fa-pencil-alt text-secondary"></i>
                          </button>

                          {{-- delete --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#delete"
                            @click=" course = {{ $course }}">
                            <i class="fa fa-trash text-danger"></i>
                          </button>
                        </div>
                      </div>

                      <div class="text-black-50 fs-6 d-flex flex-column">
                        <span>{{ $course->course_date }}</span>
                        <p>{{ $course->description }}</p>
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

      <!-- add course Modal  -->
      <div class="modal fade" id="add-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Add course
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form action="courses" method="post" class="row g-3">
                @csrf

                {{-- title --}}
                <div>
                  <label class="ms-3" for="course-add">Title</label>
                  <input name="title" x-bind:value="course.title" type="text" class="form-control rounded-pill"
                    id="course-add" placeholder="course" />
                </div>

                {{-- course date --}}
                <div>
                  <label class="ms-3" for="input-edit-time-label-id">Course date</label>
                  <input x-bind:value="course.course_date" id="input-edit-time-label-id" type="text"
                    class="form-control rounded-pill" name="course_date" placeholder="course_date" required />
                </div>

                {{-- description --}}
                <div>
                  <textarea class="form-control js-edit-modal-description" name="description" rows="3"
                    placeholder="description"></textarea>
                </div>

                <button type="submit" class="btn bg-primary text-white">
                  add
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- edit course Modal  -->
      <div class="modal fade" id="edit-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Edit course
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form x-bind:action="'courses/' + course.id" method="post" class="row g-3">
                @csrf
                @method('PUT')

                {{-- title --}}
                <div>
                  <label class="ms-3" for="course-add">Title</label>
                  <input name="title" x-bind:value="course.title" type="text" class="form-control rounded-pill"
                    id="course-add" placeholder="course" />
                </div>

                {{-- course date --}}
                <div>
                  <label class="ms-3" for="input-edit-work-time-label-id">Course date</label>
                  <input x-bind:value="course.course_date" type="text" class="form-control rounded-pill"
                    name="course_date" placeholder="course_date" required />
                </div>

                {{-- description --}}
                <div>
                  <textarea class="form-control js-edit-modal-description" name="description" rows="3" placeholder="description"
                    x-text="course.description"></textarea>
                </div>

                <button type="submit" class="btn bg-primary text-white">
                  Edit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete course modal -->
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

              <form x-bind:action="'courses/' + course.id" method="post">
                @csrf
                @method('delete')

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
