<?php  

	$ser = $this->session->userdata('uname');
	$au = $this->db->query("select * from tbl_user where uname = '$ser'");
	foreach ($au->result() as $user)
	{
	        //echo "Selamat Datang"; // access attributes
	}

?>


<div id="respon1"><?php echo $this->session->flashdata('msg');?></div>
<div class="card card-outline card-primary">
  <div class="card-header">
    <h3 class="card-title" style="text-align: center;"><a href="<?php echo base_url(); ?>dashboard">Jastra Card</a> > Undangan</h3>
  </div>
  <!-- session user atau admin -->
  <!-- penerapan FIFO pada undangan -->
  <?php if ($user->hakakses== 'user') { ?>
  	<h3 style="text-align: center; font-family: 'crm', Arial, sans-serif; font-size:50px;margin-top:10px;">Undangan Tersedia</h3>
  	<div class="album py-5">
    <div class="container">
      	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      		<?php
				$no=0;
				foreach($produk->result() as $r){
				$no++;
			?>
        <div class="col">
          <div class="card shadow-sm">
            <?php if ($r->foto_brg=="") { ?>
			<img src="<?php echo base_url(); ?>asset/img/q.png">
  			<?php
  			}
  			else { ?>
    		<img src="<?php echo base_url(); ?>asset/img/undg/<?php echo $r->foto_brg; ?>">
          	<?php
          	}
          	?>

            <div class="card-body">
              <p name="NamaUnd" style="text-align: center; font-family: 'ubt', Arial, sans-serif;"><?php echo $r->nama_brg ?></p>
              <p class="card-text">Stok tersedia: <?php echo $r->stok_brg ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary btn-click">Lihat Detail</button> -->
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#modal-default">Pemesanan</button>
                </div>
              </div>
            </div>
          </div>
        </div>


		<?php } ?>

    	</div>
	</div>
	</div>
  <?php } else { ?>
  <div class="card-body">
    <div style="text-align:right; margin-top:10px; margin-bottom: 10px;">
        <a href="<?php echo base_url('Master/datasupply') ?>" class="btn btn-warning btn-import"><i class="fa fa-cloud-upload-alt"></i> Tambah Barang</a>
    </div>
		<table class="table table-hover" id="table">
			<thead class="table-header">
				<tr>
					<th width="10%">No.</th>
					<th>Kode</th>
					<th>Nama Barang</th>
					<th>Lokasi</th>
					<th>Stok Barang</th>
					<th>Tanggal Masuk</th>
					<th>Tanggal Keluar</th>
					<th>Gambar Barang</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no=0;
					foreach($produk->result() as $r){
						$no++;
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->kode_brg ?></td>
					<td><?php echo $r->nama_brg ?></td>
					<td><?php echo $r->loka_brg ?></td>
					<td><?php echo $r->stok_brg ?></td>
					<td><?php echo $r->tanggal_msk ?></td>
					<td><?php echo $r->tanggal_keluar?></td>
					<td>
						<?php if ($r->foto_brg=="") { ?>
						<img class='img-user' src="<?php echo base_url(); ?>asset/img/q.png" width="75">
              			<?php
              			}
              			else { ?>
                		<img class='img-user' src="<?php echo base_url(); ?>asset/img/undg/<?php echo $r->foto_brg; ?>" width="75">
		              	<?php
		              	}
		              	?>
					</td>
					<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
	<?php } ?>
</div>

<div id="tempat-modal"></div>

<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
        <h3 style="display:block; text-align:center;">Hapus Data Ini?</h3>
        <form method="post" action="<?php echo base_url() ?>Master/hapussupply">
          <input type="hidden" name="id" id="id_">
          <div class="col-md-6">
            <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok-sign"></i> Ya, Hapus Data Ini</button>
          </div>
          <div class="col-md-6">
            <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Tidak</button>
          </div>
        </form>
      </div>
    </div>
  </div>
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

<script type="text/javascript">
	setTimeout(function() {document.getElementById('respon1').innerHTML='';},3000);

	$('#master').addClass('active');
	$('#pasien').addClass('active');

	$(function () {
	    $("#table").dataTable({
	      "iDisplayLength": 10,
	    });
	});

	//modal add
	$(document).on("click", ".btn-import", function() {
	  var id = $(this).attr("data-id");
	  
	  $.ajax({
	    method: "POST",
	    url: "<?php echo base_url('Master/inputsupply'); ?>",
	    data: "id=" +id
	  })
	  .done(function(data) {
	    $('#tempat-modal').html(data);        
	    $('#md_add').modal('show');
	  })
	})

	//modal Edit
	$(document).on("click", ".btn-update", function() {
	  var id = $(this).attr("data-id");
	  
	  $.ajax({
	    method: "POST",
	    url: "<?php echo base_url('Master/ubahsupply'); ?>",
	    data: "id=" +id
	  })
	  .done(function(data) {
	    $('#tempat-modal').html(data);        
	    $('#md_updt').modal('show');
	  })
	})

	//modal hapus
</script>