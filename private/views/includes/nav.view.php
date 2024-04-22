<style>
    nav ul li a{
      width: 110px;
      text-align: center;
      border-left:solid thin #eee;
      border-right:solid thin #ddd;
    }
  nav ul li a:hover{
     background-color: grey;
     color: white !important;
  }
</style>


<nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
  <div class="container-fluid">
     <a class="navbar-brand" href="#">
      <img src="<?=ROOT?>/assets/logo.jpg" class="border border-primary  rounded-circle" style="width: 50px;">
      <?=Auth::getSchool_name()?>
     </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>">DASHBOARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/schools">SCHOOLS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/users">STAFF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/students">STUDENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/classes">CLASSES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/tests">TESTS</a>
        </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?=Auth::getFirstname()?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>">Dashboard</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
          </ul>
        </li>

        </ul>
    </div>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>