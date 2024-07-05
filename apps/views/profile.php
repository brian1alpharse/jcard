<?php  

	$ser = $this->session->userdata('uname');
	$au = $this->db->query("select * from tbl_user where uname = '$ser'");
	foreach ($au->result() as $user)
	{
	        //echo "Selamat Datang"; // access attributes
	}

?>

<div class="card card-outline card-primary">
  <div class="card-header">
    <i class="fa fa-user fa-fw"></i>
    <h3 class="card-title">Data Profile Anda</h3>
  </div>
  <div class="row" style="padding: 20px 40px 10px;">
    <div class="col-md-12">

      <div class="box box-primary">
        <!-- form start -->
        <form role="form" class="form-horizontal" method="POST" action="?module=form_profil" enctype="multipart/form-data">
          <div class="box-body">

            <input type="hidden" name="username" value="<?php echo $user->uname; ?>">
            
            <div class="form-group">
              <label class="col-sm-2 control-label">
              <?php  
              if ($user->foto=="") { ?>
                <img style="border:1px solid #eaeaea;border-radius:50px;" src="<?php echo base_url(); ?>asset/img/user.png" width="75">
              <?php
              }
              else { ?>
                <img style="border:1px solid #eaeaea;border-radius:50px;" src="<?php echo base_url(); ?>asset/user/<?php echo $user->foto; ?>" width="75">
              <?php
              }
              ?>
              </label>
              <label style="font-size:25px;margin-top:10px;" class="col-sm-8">
              	<?php echo $user->nama; ?>
              	</label>
            </div>
            <hr>
            <div class="form-group">
              <label class="col-sm-2 control-label">Username</label>
              <label style="text-align:left" class="col-sm-8 control-label">: <?php echo $user->uname; ?></label>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Whatsapp</label>
              <label style="text-align:left" class="col-sm-8 control-label">: <?php echo $user->email; ?></label>
            </div>
          </div><!-- /.box body -->

        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
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