<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit data buku</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted">Edit data buku.</h6>
                <hr>
                <form method="POST" action="<?php echo base_url('admin/updatepenerbit/' . $detail['id_penerbit']) ?>">
                    <label for="id_buku">ID Penerbit : </label><input type="text" name="id_buku" class="form-control" value="<?php echo $detail['id_penerbit'] ?>" required>
                    <label for="kategori">Nama Penerbit : </label><input type="text" name="kategori" class="form-control" value="<?php echo $detail['nama_penerbit'] ?>" required>
                    <label for="nama_buku">Alamat : </label><input type="text" name="nama_buku" class="form-control" value="<?php echo $detail['alamat'] ?>" required>
                    <label for="harga">Kota : </label><input type="text" name="harga" class="form-control" value="<?php echo $detail['kota'] ?>" required>
                    <label for="stok">Telepon : </label><input type="text" name="stok" class="form-control" value="<?php echo $detail['telepon'] ?>" required>
                    <label for="nama_penerbit">Penerbit : </label>
                    <button class="btn btn-primary mt-4" type="submit">Edit data penerbit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>