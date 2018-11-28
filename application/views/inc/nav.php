    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">CodeIgniter CRUD with Google Maps API</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link<?php echo current_url() == base_url() ? ' active' : ''; ?>" href="<?php echo base_url(); ?>">Get Location</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php echo current_url() == base_url('locations') ? ' active' : ''; ?>" href="<?php echo base_url('locations'); ?>">Location List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/emreyarligan" target="_blank"><i class="fab fa-github"></i> /emreyarligan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>