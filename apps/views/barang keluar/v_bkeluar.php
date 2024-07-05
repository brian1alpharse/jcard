<div id="respon1"><?php echo $this->session->flashdata('msg');?></div>
<div class="card card-outline card-primary">
  <div class="card-header">
    <i class="fa fa-archive fa-fw"></i>
    <h3 class="card-title">Data Barang Keluar</h3>
  </div>
  <div class="box-body">
		<table class="table table-hover" id="table">
			<thead class="table-header">
				<tr>
					<th width="10%">No.</th>
					<th>Kode</th>
					<th>Nama Barang</th>
					<th>Lokasi</th>
					<th>Stok Barang</th>
					<th>Tanggal Keluar</th>
					<th>Gambar Barang</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$no=0;
					foreach($keluar->result() as $r){
						$no++;
				?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->kode_brg ?></td>
					<td><?php echo $r->nama_brg ?></td>
					<td><?php echo $r->loka_brg ?></td>
					<td><?php echo $r->stok_brg ?></td>
					<td><?php echo $r->tanggal_keluar ?></td>
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

<script type="text/javascript">
	setTimeout(function() {document.getElementById('respon1').innerHTML='';},3000);

	$('#master').addClass('active');
	$('#pasien').addClass('active');

	$(function () {
	    $("#table").dataTable({
	      "iDisplayLength": 10,
	    });
	});

</script>