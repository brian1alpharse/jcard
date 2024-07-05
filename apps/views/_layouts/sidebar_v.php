  <!-- session user atau admin -->
  <?php  

  $ser = $this->session->userdata('uname');
  $au = $this->db->query("select * from tbl_user where uname = '$ser'");
  foreach ($au->result() as $user)
  {
          //echo "Selamat Datang"; // access attributes
  }

?>


<aside class="main-sidebar sidebar-dark-primary elevation-4" style="z-index: 1040 !important;">
  <a href="<?php echo base_url() ?>Dashboard" class="brand-link">
    <img src="<?php echo base_url(); ?>asset/img/jc.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
    <span class="brand-text font-weight-light">Jastra Card</span>
  </a>

  <div class="sidebar" id="myDIVM">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" id="navList" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo base_url() ?>dashboard" class="nav-link" id="dasbor">
            <i class="nav-icon fas fa-home"></i>
              <p>Beranda</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>master/undangan" class="nav-link">
            <i class="nav-icon fas fa-envelope"></i>
              <p>Undangan</p>
          </a>
        </li>

        <?php if ($user->hakakses== "admin") { ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Master/id_plg') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Master/datasupply') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>master/brg_exspired" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                Expired Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('Master/brg_transaksi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Master/brg_msk') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Master/brg_keluar') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Barang Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <?php } else { ?>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>master/jeniskertas" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Jenis Kertas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>master/jenisfoil" class="nav-link">
              <i class="nav-icon fas fa-highlighter"></i>
              <p>
                Jenis Foil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>master/tentang" class="nav-link">
              <i class="nav-icon fas fa-landmark"></i>
              <p>
                Tentang Kami
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo base_url() ?>master/profile" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <?php } ?>


        <!-- perbatasan main sidebar -->
      </ul>      
    </nav>
    
  </div>
  
  <!-- /.sidebar -->
</aside>

<script type="text/javascript">
  // Get the container element
function myFunction(e) {
  if (document.querySelector('#navList a.active') !== null) {
    document.querySelector('#navList a.active').classList.remove('active');
  }
  e.target.className = "active";
}
</script>