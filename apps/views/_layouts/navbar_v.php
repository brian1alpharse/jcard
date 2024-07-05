<!-- session user atau admin -->
<?php  

  $ser = $this->session->userdata('uname');
  $au = $this->db->query("select * from tbl_user where uname = '$ser'");
  foreach ($au->result() as $user)
  {
          //echo "Selamat Datang"; // access attributes
  }

?>

<nav class="main-header navbar navbar-expand navbar-lightblue navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <?php if ($user->hakakses== "admin") { ?>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url(); ?>Dashboard" class="nav-link">Home</a>
    </li>
    <?php } else { ?>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url(); ?>Dashboard" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" data-toggle="modal" data-target="#modal-default" class="nav-link">Contact</a>
    </li>
    <?php } ?>
  </ul>


  <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" role="button">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="col">
            <p class="row justify-content-center">
              <small>Jastra Card</small>
            </p>
          </div>
          <div class="dropdown-divider"></div>          
          <div class="user-panel mt-2 pb-3 mb-3 d-flex">
            <div class="image">
            <?php  
            if ($user->foto=="") { ?>
              <img src="<?php echo base_url(); ?>asset/user/user-default.png" class="img-circle elevation-2" alt="User Image">
            <?php
            }
            else { ?>
              <img src="<?php echo base_url(); ?>asset/user/<?php echo $user->foto; ?>" class="img-circle elevation-2" alt="User Image">
            <?php
            }
            ?>
            <div class="info">
              <a href="#" class="d-block"><?php echo $user->nama; ?></a>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
          <div class="row justify-content-center">
          <a href="<?php echo base_url() ?>Master/profile" class="btn btn-default btn-flat" style="margin: 2%; background: #b0ffff;">
            <i class="fas fa-user" onclick="Profil()"></i> Profil
          </a>
          <a href="<?php echo base_url() ?>Login/logout" class="btn btn-default btn-flat" style="margin: 2%;background: #ffa882;">
            <i class="fas fa-user-times" onclick="logout()"></i> Keluar
          </a> 
          </div>           
        </div>
        </li>
  </ul>
</nav>
<script type="text/javascript">
    //fungsi ini dipanggil di baris 55
    function logout()
    {
      //alihkan ke fungsi "logout" ("controllers/Clogin.php" baris 81-88)
      location.href='<?php echo site_url('Login/logout') ?>';
    }
    function Profile(){
      location.href='<?php echo site_url('Login/profile') ?>';
    }
  </script>