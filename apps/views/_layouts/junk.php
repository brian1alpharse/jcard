<section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header"><strong>MAIN MENU</strong></li>
      
      <li class="treeview beranda" id="beranda">
        <a href="<?php echo base_url() ?>dashboard">
          <i class="ion ion-ios-home"></i> <span>Beranda</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <?php if ($user->hakakses== "admin") { ?>
      <li class="treeview" id="master">
        <a href="#">
          <i class="ion ion-ios-folder"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
         <ul class="treeview-menu">
          <li id="pelanggan"><a href="<?php echo base_url('Master/id_plg') ?>"><i class="ion ion-ios-checkmark"></i>Data Pelanggan</a></li>
        </ul>
        <ul class="treeview-menu">
          <li id="pelanggan"><a href="<?php echo base_url('Master/datasupply') ?>"><i class="ion ion-ios-checkmark"></i>Data Barang</a></li>
        </ul>
      </li>
      <?php } else { ?>
        <li class="treeview beranda" id="beranda">
        <a href="<?php echo base_url() ?>master/tentang">
          <i class="ion ion-ios-information"></i> <span>Tentang Kami</span>
            <span class="pull-right-container">
            </span>
        </a>
      </li>
      <li class="treeview beranda" id="beranda">
        <a href="<?php echo base_url() ?>master/jeniskertas">
          <i class="ion ion-ios-information"></i> <span>Jenis Kertas</span>
            <span class="pull-right-container">
            </span>
        </a>
      </li>
      <?php } ?>


      <?php if ($user->hakakses== "admin") { ?>
      <li class="treeview beranda" id="expired">
        <a href="<?php echo base_url('Master/brg_exspired') ?>">
          <i class="ion ion-ios-timer"></i> <span>Expired Barang</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <?php if ($user->hakakses== "admin") { ?>
      <?php } ?>
    <li class="treeview" id="beranda">
        <a href="#">
          <i class="ion ion-ios-book"></i>
          <span>Laporan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
         <ul class="treeview-menu">
          <li id="transaksi"><a href="<?php echo base_url('Master/brg_transaksi') ?>"><i class="ion ion-ios-checkmark"></i>Data Transaksi</a></li>
        </ul>
        <ul class="treeview-menu">
          <li id="barangmasuk"><a href="<?php echo base_url('Master/brg_msk') ?>"><i class="ion ion-ios-checkmark"></i>Data Barang masuk</a></li>
        </ul>
         <ul class="treeview-menu">
          <li id="pelanggan"><a href="<?php echo base_url('Master/brg_keluar') ?>"><i class="ion ion-ios-checkmark"></i>Data Barang keluar</a></li>
        </ul>
      </li>
      <?php } ?>


      <li class="treeview profile" id="profile">
        <a href="<?php echo base_url() ?>Master/profile">
          <i class="ion ion-person-stalker"></i> <span>Profile</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      
    </ul>
  </section>











  <li class="user-header">
          <?php  
          if ($user->foto=="") { ?>
            <img src="<?php echo base_url(); ?>asset/user//user-default.png" class="user-image" alt="User Image"/>
          <?php
          }
          else { ?>
            <img src="<?php echo base_url(); ?>asset/user/<?php echo $user->foto; ?>" class="user-image" alt="User Image"/>
          <?php
          }
          ?>

          <p>
            <?php echo $user->nama; ?>
            <small>Jastra Card</small>
          </p>
        </li>
        <li class="user-footer">
          <div class="pull-left">
            <a href="<?php echo base_url() ?>Master/profile" class="btn btn-default btn-flat">
              <i class="fa fa-user" onclick="Profil()"></i> Profil
            </a>
          </div>
          <div class="pull-right"> 
            <a href="<?php echo base_url() ?>Login/logout" class="btn btn-default btn-flat">
              <i class="fa fa-sign-out" onclick="logout()"></i> Keluar
            </a> 
          </div>
        </li>
      </ul>






      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>dashboard" class="logo">
          <span class="logo-mini"><img width="40px" src="<?php echo base_url(); ?>asset/img/jc.png"></span>
          <span class="logo-lg" style="font-size:12pt;"><img width="70px" src="<?php echo base_url(); ?>asset/img/jastra.png"> <b>Jastra Card</b></span>
        </a>

        
      </header>




      <!-- slider -->
<div class="col-lg-12">
  <!-- <h2></h2> -->  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="asset/img/war.jpeg" alt="" style="width:100%; height: 315px;">
      </div>

      <div class="item">
           <img src="asset/img/und.jpg" alt="" style="width:100%; height: 315px;">
      </div>
    
      <div class="item">
            <img src="asset/img/dek.jpg" alt="" style="width:100%; height: 315px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="modal fade" id="modal-overlay">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="overlay">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
              <h4 class="modal-title">Contact Jastra Card</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <a href="https://wa.me/+6282246324321">
                <button style="border:0;">
                  <img style="width: 35px;" src="<?php echo base_url(); ?>asset/img/wa.png">
                </button>
              </a>
              <a href="https://instagram.com/jastracard?igshid=YmMyMTA2M2Y=">
                <button style="border:0;">
                  <img style="width: 30px;" src="<?php echo base_url(); ?>asset/img/ig.png">
                </button>
              </a>
              <a href="https://www.facebook.com/profile.php?id=100064763317030">
                <button style="border:0;">
                  <img style="width: 30px;" src="<?php echo base_url(); ?>asset/img/fb.png">
                </button>
              </a>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->