@extends('layouts.user')

@section('title', 'skills page')

@section('content')
  <main class="container-lg mt-4" x-data="{ activeNav: 'skills', skill: {} }">
    <div class="row">
      @include('includes.user.sidebar')

      <!-- info Section -->
      <section class="col-lg-8 col-md-8 col-12">
        <div class="card p-3 shadow">
          <div class="card-header d-flex justify-content-between align-items-center bg-transparent">
            <h3 class="fw-bold text-primary">Skills</h3>

            <a role="button" data-bs-toggle="modal" data-bs-target="#add-skill">
              <i class="fa fa-plus fw-bold fs-5 text-primary"></i>
            </a>
          </div>

          @include('includes.alerts')


          <div class="card-body p-0">
            <div class="row">
              @if (isset($skills))
                <!-- loop -->
                @foreach ($skills as $skill)
                  <div class="col-12 mb-2">
                    <div class="p-3 shadow-sm">
                      <div class="d-flex justify-content-between mb-2">
                        <h5>{{ $skill->title }}</h5>

                        <div>
                          {{-- edit --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-skill"
                            @click=" skill = {{ $skill }}">
                            <i class="fa fa-pencil-alt text-secondary"></i>
                          </button>

                          {{-- delete --}}
                          <button class="btn mx-2" role="button" data-bs-toggle="modal" data-bs-target="#delete"
                            @click=" skill = {{ $skill }}">
                            <i class="fa fa-trash text-danger"></i>
                          </button>

                        </div>
                      </div>
                    </div>

                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: {{ $skill->progress }}%">
                        {{ $skill->progress }}
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

      <!-- add skill Modal  -->
      <div class="modal fade" id="add-skill" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Add skill
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form action="skills" method="post" class="row g-3">
                @csrf

                <div>
                  <label class="ms-3" for="skill-add">Title</label>

                  <input name="title" x-bind:value="skill.text" type="text" class="form-control rounded-pill"
                    id="skill-add" placeholder="Skill" />
                </div>

                <input name="progress" x-bind:value="skill.progress" type="range" class="form-range"
                  id="customRange1" />


                <button type="submit" class="btn bg-primary text-white">
                  add
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- edit skill Modal  -->
      <div class="modal fade" id="edit-skill" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-3">
            <div class="modal-header">
              <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
                Edit skill
              </h4>

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <form x-bind:action="'skills/' + skill.id" method="post" class="row g-3">
                @csrf
                @method('PUT')

                <input name='title' x-bind:value="skill.title" type="text" class="form-control rounded-pill" id="skill"
                  placeholder="Skill" />

                <input name="progress" x-bind:value="skill.progress" type="range" class="form-range"
                  id="customRange1" />
                <button type="submit" class="btn bg-primary text-white">
                  Edit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Delete skill modal -->
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

              <form x-bind:action="'skills/' + skill.id" method="post">
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
