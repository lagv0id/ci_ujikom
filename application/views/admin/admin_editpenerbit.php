<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="card pt-3">

            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>

            <div class="card-body">
                <h5 class="card-title">Edit data buku</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted">Edit data buku.</h6>
                <hr>
                <form method="POST" action="<?php echo base_url('admin/updatepenerbit/' . $detail['id_penerbit']) ?>">
                    <label for="id_buku">ID Penerbit : </label><input type="text" name="id_penerbit" class="form-control" value="<?php echo $detail['id_penerbit'] ?>" required>
                    <label for="kategori">Nama Penerbit : </label><input type="text" name="nama_penerbit" class="form-control" value="<?php echo $detail['nama_penerbit'] ?>" required>
                    <label for="nama_buku">Alamat : </label><input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat'] ?>" required>
                    <label for="harga">Kota : </label><input type="text" name="kota" class="form-control" value="<?php echo $detail['kota'] ?>" required>
                    <label for="stok">Telepon : </label><input type="text" name="telepon" class="form-control" value="<?php echo $detail['telepon'] ?>" required>
                    <button class="btn btn-primary mt-4" type="submit">Edit data penerbit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>