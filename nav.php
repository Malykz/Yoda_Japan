<nav class="navbar navbar-expand-lg bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand text-light ms-3" href="#">Cafekita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-light" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="menu/menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="karyawan/karyawan.php">Karyawan</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown" style="margin-right: 6rem;">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['nama']; ?>
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-light" href="index.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>