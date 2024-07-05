<div id="respon1"><?php echo $this->session->flashdata('msg');?></div>
<div class="card card-outline card-primary">
  <div class="card-header">
    <i class="fa fa-archive fa-fw"></i>
    <h3 class="card-title">Data Pelanggan</h3>
  </div>
  <div class="card-body">
		<table class="table table-hover" id="table">
			<thead class="table-header">
				<tr>
					<th width="10%">No.</th>
					<th>gambar pelanggan</th>
					<th>id Pelanggan</th>
					<th>Username </th>
					<th>Email</th>
					<th width="15%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no=0;
					foreach($pelanggan->result() as $r){
						$no++;
				?>
				<tr>
					<td><?php echo $no ?></td>
						<td>
						<?php if ($r->gambar_brg=="") { ?>
						<img class='img-user' src="<?php echo base_url(); ?>asset/img/user.png" width="50">
              			<?php
              			}
              			else { ?>
                		<img class='img-user' src="<?php echo base_url(); ?>asset/img/<?php echo $r->gambar_brg; ?>" width="75">
		              	<?php
		              	}
		              	?>
					</td>
					<td><?php echo $r->id_plg ?></td>
					<td><?php echo $r->username ?></td>
					<td><?php echo $r->email ?></td>
					<td>
						<a href="javascript:;" class="btn btn-danger btn-xs hapus-data" data-toggle="modal" data-target="#konfirmasiHapus" data-id="<?php echo $r->id_plg ?>"><i class="fa fa-trash fa-fw" style="color:#ffffff;"></i>  <span style="color:#ffffff;">Hapus</span></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
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


<div id="tempat-modal"></div>

<div class="modal fade" id="konfirmasiHapus" role="dialog">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
        <h3 style="display:block; text-align:center;">Hapus Data Ini?</h3>
        <form method="post" action="<?php echo base_url() ?>Master/hapuspelanggan">
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
	    url: "<?php echo base_url('Master/inputpelanggan'); ?>",
	    data: "id=" +id
	  })
	  .done(function(data) {
	    $('#tempat-modal').html(data);        
	    $('#md_add').modal('show');
	  })
	})

	//modal hapus
	$(document).on("click", ".hapus-data", function() {
		id = $(this).attr("data-id");
		$('#id_').val(id);
	})
</script>