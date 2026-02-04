<nav class="navbar navbar-expand-lg navbar-dark site-nav">
  <div class="container">
    <a class="navbar-brand d-lg-none" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav" aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="primaryNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL; ?>/#intro">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $baseURL; ?>/#services">All Services</a></li>
            <li><a class="dropdown-item" href="<?php echo $baseURL; ?>/#service-helpdesk">Helpdesk Support</a></li>
            <li><a class="dropdown-item" href="<?php echo $baseURL; ?>/#service-network">Network Management</a></li>
            <li><a class="dropdown-item" href="<?php echo $baseURL; ?>/#service-cybersecurity">Cybersecurity</a></li>
            <li><a class="dropdown-item" href="<?php echo $baseURL; ?>/#service-strategy">Strategic Planning</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL; ?>/why">Why ITFix</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $baseURL; ?>/contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
