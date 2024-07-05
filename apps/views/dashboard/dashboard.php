  <?php  

  $ser = $this->session->userdata('uname');
  $au = $this->db->query("select * from tbl_user where uname = '$ser'");
  foreach ($au->result() as $user)
  {
          //echo "Selamat Datang"; // access attributes
  }

?>
<?php if ($user->hakakses== "user") { ?>

<div class="row justify-content-center">
  <img style="width: 50%; margin-bottom: 0%;" src="asset/img/jastra.png">
</div>

<?php } ?>


<?php if ($user->hakakses== "admin") { ?>
<div class="row" style="margin-top: 2%">
 <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-blue">
      <div class="inner">

        <?php 
          foreach($produk->result() as $r){
            $dat_tsp = $r->dat_tsp;
            }?>
	
        <h3><?php echo $r->dat_tsp ?></h3>

        <p>Jumlah Supply Gudang</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-bookmarks"></i>
      </div>
      <a href="<?php echo base_url('Master/datasupply') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

 <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">

        <?php 
          foreach($produk->result() as $r){
            $datagt = $r->datagt;
            }?>
  
        <h3><?php echo $r->datagt ?></h3>

        <p>Data Pelanggan</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-people"></i>
      </div>
      <a href="<?php echo base_url('Master/id_plg') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

 <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">

        <?php 
          foreach($produk->result() as $r){
            $datkl = $r->datkl;
            }?>
  
        <h3><?php echo $r->datkl ?></h3>

        <p>Jumlah Barang keluar</p>
      </div>
      <div class="icon">
        <i class="ion ion-paper-airplane"></i>
      </div>
      <a href="<?php echo base_url('Master/brg_keluar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">

        <?php 
          foreach($produk->result() as $r){
            $lapr = $r->lapr;
            }?>
  
        <h3><?php echo $r->lapr ?></h3>

        <p>Laporan</p>
      </div>
      <div class="icon">
        <i class="ion ion-document-text"></i>
      </div>
      <a href="<?php echo base_url('Master/brg_transaksi') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<?php } ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd6.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url(); ?>asset/img/sd7.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contact Jastra Card</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Whatsapp:</p>
        <a href="https://wa.me/+6282246324321">
          <div class="image">
            <img class="img-circle" style="width: 35px;" src="<?php echo base_url(); ?>asset/img/wa.png"> Kontak Admin 1
          </div>
        </a>
        <a href="https://wa.me/+6282246324321">
          <div class="image">
            <img class="img-circle" style="width: 35px;" src="<?php echo base_url(); ?>asset/img/wa.png"> Kontak Admin 2
          </div>
        </a>
        <hr>
        <p>Instagram:</p>
        <a href="https://instagram.com/jastracard?igshid=YmMyMTA2M2Y=">
          <div class="image">
            <img class="img-rounded" style="width: 30px;" src="<?php echo base_url(); ?>asset/img/ig.png"> Instagram
          </div>
        </a>
        <hr>
        <p>Facebook:</p>
        <a href="https://www.facebook.com/profile.php?id=100064763317030">
          <div class="image">
            <img class="img-circle" style="width: 30px;" src="<?php echo base_url(); ?>asset/img/fb.png"> Facebook
          </div>
        </a>
        <hr>
        <p style="margin-top: 2%">Untuk pemesanan undangan dapat dilakukan pada aplikasi android kami.</p>
        <a href="">Klik untuk mendownload aplikasi</a>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

      

<!-- tulisan berjalan -->
  <marquee>
    <h3 style="margin-top: 2%; font-family: 'ubt', Arial, sans-serif; font-size:25px;">Jastra Card Mengutamakan Kepuasan Anda, Setiap Desain Pasti Akan Berkesan Disetiap Mata Yang Melihat</h3>
  </marquee>

<!-- <script type="text/javascript">
  $('#beranda').addClass('active');
</script> -->

<?php if ($user->hakakses== "user") { ?>

<div class="card card-solid">
  <div class="card-body">
    <h1 style="text-align: center; font-family: 'crm', Arial, sans-serif;">Jenis Kertas Undangan</h1>

    <div style="display: inline-block; margin-top: 15px">
        <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Linen</span>
        <p style="padding-right: 10%; text-align: justify;  font-family: 'ubl', Arial, sans-serif;">
          <img class="product-image-thumb" style="margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/linen.jfif">Kertas Linen bertekstur dan bermotif, jenis kertas ini mempunyai karakter kuat sehingga jika desain undangan yang Anda buat sangat tepat, maka undangan yang dihasilkan akan terlihat mewah namun tetap elegan. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini.</p>
          <a href="" data-toggle="modal" data-target="#modal-default">Hubungi Kami Untuk Informasi Serta Pemesanan</a>
    </div>

    <hr>

    <div style="display: inline-block; margin-top: 15px">
        <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Flamboyan</span>
        <p style="padding-right: 10%; text-align: justify; font-family: 'ubl', Arial, sans-serif;">
          <img class="product-image-thumb" style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/2.png">Fancy Paper Flamboyan, Lembar kertas bertekstur, Setiap kertas. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini.</p>
            <a href="" data-toggle="modal" data-target="#modal-default">Hubungi Kami Untuk Informasi Serta Pemesanan</a>

    <hr>

    <a href="<?php echo base_url() ?>master/jeniskertas">Lihat Yang Lainnya</a>

<!-- <div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Jasmine / Plasma</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/3.png">Kertas Jasmine merupakan jenis kertas memiliki gramatur tebal dan tipis dengan efek kertas yang memiliki glitter. Sering digunakan untuk mencetak undangan, cover gift box, kartu ucapan, buket bunga, paper flower dll ( bisa dicetak menggunakan printer inkjet dan laser). untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div>
<div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Art Paper</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/4.jpg">Art Paper digunakan untuk cetak brosur dan kalender gantung. Untuk undangan bisa dijadikan pelapis luar atau dalam hard cover dari undangan, tapi dapat juga digunakan untuk isi undangan tersebut. Hasil undangan dengan jenis kertas ini akan lebih terlihat mewah jika dilaminasi dengan doff, glossy, atau UV. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div>    
<div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Tulip</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/7.jpg">jenis kertas ini memiliki tekstur yang sangat mirip seperti kulit buah melon. Dengan tekstur yang sangat unik dan artistik,Hal ini dikarenakan kertas tulip memberikan kesan yang mewah, unik dan berkelas. Kertas jenis tulip ini tidak memiliki pilihan gramatur. jenis kertas ini memiliki banyak pilihan warna seperti kertas jasmin, ada warna pink, krem, putih, hijau, biru, dan lain-lain. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div>
<div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Aster</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/8.jpg">Kertas Aster merupakan bahan undangan yang memiliki tekstur dan permukaan yang halus,Bagi orang yang ingin membuat undangan pernikahan ekslusif, kertas Aster sering kali menjadi alternatif. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div>
<div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Buffalo Light Green</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/buffalo.png">Kertas Buffalo merupakan kertas undangan yang lebih dikenal dengan kertas manila. Namun, perbedaan mendasar antara keduanya terletak pada tekstur kertasnya, Tekstur kertas buffalo lebih kasar. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div>
<div style="display: inline-block; margin-top: 15px">
    <span style=" color: black; font-family: 'crm', Arial, sans-serif; font-size:35px; ">Undangan Kertas Duplek 310</span>
    <p style="padding-right: 10%;  font-family: 'ubl', Arial, sans-serif;"><img style="width: 16%; margin-bottom: 0%; margin-right: 2%; float: left;" src="<?php echo base_url(); ?>asset/img/duplex.jpeg">Kertas Undangan Duplek Merupakan salah satu jenis kertas karton yang memiliki dua sisi berbeda. Satu sisi permukaannya memiliki warna putih, sedangkan di sisi lain memiliki warna abu-abu. Untuk penjelasan secara detail /pemesanan bisa langsung hubungi admin dibawah ini</p>
    <div>
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
</div> -->

  </div>
</div>

    <!-- akses link obrolan -->
<!-- <div>
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
    <a href="https://www.facebook.com/profile.php?id=100064763317030">
    <button style="border:0;">
      <img style="width: 40px;" src="<?php echo base_url(); ?>asset/img/and.png">
      <span style="color: black;">Pemesanan Melalui Android</span>
    </button>
  </a>
</div> -->
<?php } ?>

<script type="text/javascript">
  $('#dasbor').addClass('active');
</script>
