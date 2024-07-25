 <!-- Navbar start -->
 <div class="container-fluid fixed-top">
     <div class="container topbar bg-primary d-none d-lg-block">
         <div class="d-flex justify-content-between">
             <div class="top-info ps-2">
                 <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Kudus, Indonesia</a></small>
                 <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Tanikuy@gmail.com</a></small>
             </div>
             <div class="top-link pe-2">
                 <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                 <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                 <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
             </div>
         </div>
     </div>
     <div class="container px-0">
         <nav class="navbar navbar-light bg-white navbar-expand-xl">
             <a href="index.html" class="navbar-brand">
                 <h1 class="text-primary display-6">TaniKuy!</h1>
             </a>
             <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                 <span class="fa fa-bars text-primary"></span>
             </button>
             <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                 <div class="navbar-nav mx-auto">
                     <a href="beranda" class="nav-item nav-link <?php echo (base_url('beranda')) ?>">Beranda</a>
                     <a href="marketplace" class="nav-item nav-link <?php echo (base_url('marketplace')) ?>">Marketplace</a>
                     <a href="forum" class="nav-item nav-link  <?php echo (base_url('forum')) ?>">Forum</a>
                     <a href="berita" class="nav-item nav-link  <?php echo (base_url('berita')) ?>">Berita dan Cuaca</a>
                 </div>
                 <div class="d-flex m-3 me-0">
                     <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                     <a href="#" class="position-relative me-4 my-auto">
                         <i class="fa fa-shopping-bag fa-2x"></i>
                         <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                     </a>
                     <a href="<?php echo (base_url('profil')) ?>" class="my-auto">
                         <?= session()->get('username') ?>
                     </a>
                     <a href="logout" class="my-auto">
                         Logout
                     </a>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Navbar End -->