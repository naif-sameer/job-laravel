 <!-- Dashboard Nav Section -->
 <div class="col-lg-4 col-md-4 col-12 mb-3">
   <div class="card p-3 pt-0 shadow">
     {{-- header --}}
     <header>
       <!-- user avatar -->
       <div class="col-12 d-flex justify-content-center align-items-center position-relative text-secondary p-4">
         <img src="/assets/images/avatar.jpg" class="user-avatar img-fluid rounded-circle" alt="user avatar" />
       </div>

       <!-- name -->
       <div class="text-center">
         <a class="text-primary fs-4 fw-bold" href="">Ali Ahmed</a>
         <p>Front end Developer</p>
       </div>
     </header>

     <!-- dashboard nav -->
     <nav class="card d-flex text-secondary mt-3 gap-3 px-3 py-4">
       <!-- info -->
       <a href="user-info" x-bind:class="activeNav ==='index' ? 'text-primary' :'text-secondary'"
         class="d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
         <i class="fa fa-user pe-2"></i>
         <span class="fs-6 fw-bold">Info</span>
       </a>

       <!-- skills -->
       <a href="skills" x-bind:class="activeNav ==='skills' ? 'text-primary' :'text-secondary'"
         class="d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
         <i class="fa fa-shekel-sign pe-2"></i>
         <span class="fs-6 fw-bold">Skills</span>
       </a>

       <!-- experience -->
       <a href="experience" x-bind:class="activeNav ==='experiences' ? 'text-primary' :'text-secondary'"
         class="d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
         <i class="fa fa-object-group pe-2"></i>
         <span class="fs-6 fw-bold">Experiences</span>
       </a>


       <!-- Courses -->
       <a href="courses" x-bind:class="activeNav ==='courses' ? 'text-primary' :'text-secondary'"
         class="d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
         <i class="fa fa-paperclip pe-2"></i>
         <span class="fs-6 fw-bold">Courses</span>
       </a>

       <!-- log out -->
       <a href="logout" class="text-secondary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
         <i class="fa fa-sign-out-alt pe-2"></i>
         <span class="fs-6 fw-bold">Logout</span>
       </a>
     </nav>
   </div>
 </div>
