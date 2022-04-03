@include('includes.head')

<main class="container-lg mt-4">
  <div class="row">
    <!-- Dashboard Nav Section -->
    <div class="col-lg-4 col-md-4 col-12 mb-3">
      <div class="card p-3 pt-0 shadow">
        <!-- user avatar -->
        <div class="col-12 d-flex justify-content-center align-items-center position-relative p-4">
          <img src="/assets/images/avatar.jpg" class="user-avatar img-fluid rounded-circle" alt="user avatar" />
        </div>

        <!-- name -->
        <div class="text-center">
          <a class="text-primary fs-4 fw-bold" href="">Ali Ahmed</a>
          <p>Front end Developer</p>
        </div>

        <!-- dashboard nav -->
        <nav class="card d-flex mt-3 gap-3 px-3 py-4">
          <!-- info -->
          <a href="user-info" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-user pe-2"></i>
            <span class="fs-6 fw-bold">Info</span>
          </a>

          <!-- skills -->
          <a href="skills" class="text-primary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-shekel-sign pe-2"></i>
            <span class="fs-6 fw-bold">Skills</span>
          </a>

          <!-- experience -->
          <a href="experience" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-object-group pe-2"></i>
            <span class="fs-6 fw-bold">Experience</span>
          </a>

          <!-- education -->
          <a href="education" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-book pe-2"></i>
            <span class="fs-6 fw-bold">Education</span>
          </a>

          <!-- Courses -->
          <a href="courses" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-paperclip pe-2"></i>
            <span class="fs-6 fw-bold">Courses</span>
          </a>
          <!-- log out -->
          <a href="/" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
            <i class="fa fa-sign-out-alt pe-2"></i>
            <span class="fs-6 fw-bold">Logout</span>
          </a>
        </nav>
      </div>
    </div>

    <!-- info Section -->
    <section class="col-lg-8 col-md-8 col-12">
      <div class="card p-3 shadow">
        <div class="card-header d-flex justify-content-between align-items-center bg-transparent">
          <h3 class="fw-bold text-primary">Skills</h3>

          <a role="button" data-bs-toggle="modal" data-bs-target="#add-skill">
            <i class="fa fa-plus fw-bold fs-5 text-primary"></i>
          </a>
        </div>

        <div class="card-body p-0">
          <div class="row">
            <!--  skill 1 -->
            <div class="col-12 mb-2">
              <div class="p-3 shadow-sm">
                <div class="d-flex justify-content-between mb-2">
                  <h5>Web development</h5>

                  <div>
                    <a class="mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-skill">
                      <i class="fa fa-pencil-alt text-secondary"></i>
                    </a>

                    <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                      <i class="fa fa-trash text-danger"></i>
                    </a>
                  </div>
                </div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">
                    100%
                  </div>
                </div>
              </div>
            </div>

            <!--  skill 2 -->
            <div class="col-12 mb-2">
              <div class="p-3 shadow-sm">
                <div class="d-flex justify-content-between mb-2">
                  <h5>Database</h5>

                  <div>
                    <a class="mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-skill">
                      <i class="fa fa-pencil-alt text-secondary"></i>
                    </a>

                    <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                      <i class="fa fa-trash text-danger"></i>
                    </a>
                  </div>
                </div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">
                    100%
                  </div>
                </div>
              </div>
            </div>

            <!--  skill 3 -->
            <div class="col-12 mb-2">
              <div class="p-3 shadow-sm">
                <div class="d-flex justify-content-between mb-2">
                  <h5>Team player</h5>

                  <div>
                    <a class="mx-2" role="button" data-bs-toggle="modal" data-bs-target="#edit-skill">
                      <i class="fa fa-pencil-alt text-secondary"></i>
                    </a>

                    <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                      <i class="fa fa-trash text-danger"></i>
                    </a>
                  </div>
                </div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">
                    100%
                  </div>
                </div>
              </div>
            </div>

            <!--  skill 4 -->
            <div class="col-12 mb-2">
              <div class="p-3 shadow-sm">
                <div class="d-flex justify-content-between mb-2">
                  <h5>Generous</h5>

                  <div>
                    <a class="mx-2" role="button" data-bs-toggle="modal" data-bs-target="#addSkill">
                      <i class="fa fa-pencil-alt text-secondary"></i>
                    </a>

                    <a role="button" data-bs-toggle="modal" data-bs-target="#delete">
                      <i class="fa fa-trash text-danger"></i>
                    </a>
                  </div>
                </div>

                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">
                    100%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<!-- add skill Modal  -->
<div class="modal fade" id="add-skill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
          Add Skill
        </h4>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="row g-3">
          <input type="text" class="form-control rounded-pill" id="skill" placeholder="Skill" />
          <input type="range" class="form-range" id="customRange1" />
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn bg-primary text-white">add</button>
      </div>
    </div>
  </div>
</div>

<!-- edit skill Modal  -->
<div class="modal fade" id="edit-skill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h4 class="modal-title fw-bold text-center" id="exampleModalLabel">
          Edit Skill
        </h4>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="row g-3">
          <input type="text" class="form-control rounded-pill" id="skill" placeholder="Skill" />
          <input type="range" class="form-range" id="customRange1" />
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn bg-primary text-white">
          Edit
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Delete skill modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

@include('includes.script')
</body>

</html>
