<div class="col-3 d-flex flex-column bg-dark flex-shrink-0 p-4 text-white">
  <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-decoration-none mb-3 text-white">
    <span class="fs-4 px-2">Jobs-finder</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column text-capitalize mb-auto">
    <li class="nav-item">
      <a href="/admin" class="nav-link {{ $activeNav === 'dashboard' ? 'active' : '' }} text-white"
        aria-current="page">
        Dashboard
      </a>
    </li>

    <li>
      <a href="/admin/sliders" class="nav-link {{ $activeNav === 'slider' ? 'active' : '' }} text-white">
        Sliders
      </a>
    </li>

    <li>
      <a href="/admin/jobs" class="nav-link {{ $activeNav === 'job' ? 'active' : '' }} text-white">
        Jobs
      </a>
    </li>

    <li>
      <a href="/admin/companies" class="nav-link {{ $activeNav === 'companies' ? 'active' : '' }} text-white">
        Companies
      </a>
    </li>

    <li>
      <a href="/admin/about" class="nav-link {{ $activeNav === 'about' ? 'active' : '' }} text-white">
        about Us
      </a>
    </li>

    <li>
      <a href="/admin/services" class="nav-link {{ $activeNav === 'services' ? 'active' : '' }} text-white">
        Services
      </a>
    </li>
  </ul>
  <hr>

</div>
