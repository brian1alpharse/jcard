<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel"><i class="fa fa-cloud-upload fa-fw"></i> Tambah Data Barang</h4>
</div>

<form method="post" action="<?php echo base_url() ?>Master/simpandatasupply" enctype="multipart/form-data">
  <div class="modal-body" style="max-height: calc(100vh - 210px);  overflow-y: auto;">
    <div class="form-group">
        <label> Kode Barang :</label>
        <input type="text" name="Kode" class="form-control" placeholder="Masukkan Kode Barang" required>
    </div> 

     <div class="form-group">
        <label> Nama Barang :</label>
        <input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama Barang" required>
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
        <input type="text" name="Stok" class="form-control" placeholder="Masukkan Stok Barang" required>
    </div>
      <div class="form-group">
        <label> Tanggal Masuk :</label>
        <input type="date" name="masuk" class="form-control" placeholder="Masukkan Tanggal Barang" required>
    </div>
      <div class="form-group">
        <label> Tanggal Keluar :</label>
        <input type="date" name="keluar" class="form-control" placeholder="Masukkan Tanggal Barang Keluar" required>
    </div>

     
    <div class="form-group">
        <label> gambar Barang :</label>
        <input type="file" name="Foto" class="form-control" placeholder="Masukkan Gambar Barang" id="foto_brg" accept=".jpg, .jpeg, .png, .JPG, .PNG" required>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary"><i class="fa fa-cloud-upload fa-fw"></i> Simpan</button>
    <button type="button" class="btn btn-danger " data-dismiss="modal"> <i class="fa fa-close fa-fw"></i>Close</button>
  </div>
</form>
</form>