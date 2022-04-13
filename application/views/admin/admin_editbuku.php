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
                <form method="POST" action="<?php echo base_url('admin/update/' . $detail['id_buku']) ?>">
                    <label for="id_buku">ID Buku : </label><input type="text" name="id_buku" class="form-control" value="<?php echo $detail['id_buku'] ?>" required>
                    <label for="kategori">Kategori : </label><input type="text" name="kategori" class="form-control" value="<?php echo $detail['kategori'] ?>" required>
                    <label for="nama_buku">Nama Buku : </label><input type="text" name="nama_buku" class="form-control" value="<?php echo $detail['nama_buku'] ?>" required>
                    <label for="harga">Harga : </label><input type="number" name="harga" class="form-control" value="<?php echo $detail['harga'] ?>" required>
                    <label for="stok">Stok : </label><input type="number" name="stok" class="form-control" value="<?php echo $detail['stok'] ?>" required>
                    <label for="nama_penerbit">Penerbit : </label>
                    <select class="form-select" name="nama_penerbit" value="<?php echo $detail['nama_penerbit'] ?>">
                        <?php foreach ($list as $item) { ?>
                            <option value="<?php echo $item['nama_penerbit']; ?>"><?php echo $item['nama_penerbit']; ?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-primary mt-4" type="submit">Edit data buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>