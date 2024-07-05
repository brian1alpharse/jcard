<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-tag fa-fw"></i> Ubah Data Barang</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/updatesupply">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
  <?php
    foreach($supply->result() as $r){
      $Kode = $r->kode_brg;
      $Nama = $r->nama_brg;
      $Loka = $r->loka_brg;
      $Stok = $r->stok_brg;

    }
  ?>     
      <div class="form-group">
          <label> Kode Barang :</label>
          <input type="text" name="Kode" class="form-control" placeholder="Kode Barang" required value="<?php echo $Kode ?>" readonly>
      </div> 

      <div class="form-group">
          <label> Nama Barang :</label>
          <input type="text" name="Nama" class="form-control" placeholder="Nama Barang" required value="<?php echo $Nama ?>" >
      </div> 
	  
	   <div class="form-group">
          <label> Lokasi Barang :</label>
          <select type="text" class="form-control" name="Loka" required>
            <option value="" selected="" disabled="">Pilih</option>
            <option value="Gudang A">Gudang A</option>
            <option value="Gudang B">Gudang B</option>
            <option value="Gudang C">Gudang C</option>
            <option value="Gudang D">Gudang D</option>
          </select>
    </div> 
	   
      <div class="form-group">
          <label> Stok Barang :</label>
          <input type="text" name="Stok" class="form-control" placeholder="Lokasi Barang" value="<?php echo $Stok ?>">
      </div> 


  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>