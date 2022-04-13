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
                <h5 class="card-title">Tambah data buku</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted">Tolong masukkan data dengan benar.</h6>
                <hr>
                <form method="POST" action="<?php echo base_url('admin/insert') ?>">
                    <label for="id_buku">ID Buku : </label><input type="text" name="id_buku" class="form-control" required>
                    <label for="kategori">Kategori : </label><input type="text" name="kategori" class="form-control" required>
                    <label for="nama_buku">Nama Buku : </label><input type="text" name="nama_buku" class="form-control" required>
                    <label for="harga">Harga : </label><input type="text" name="harga" class="form-control" required>
                    <label for="stok">Stok : </label><input type="text" name="stok" class="form-control" required>
                    <label for="nama_penerbit">Penerbit : </label>
                    <select class="form-select" name="nama_penerbit">
                        <?php foreach ($list as $item) { ?>
                            <option value="<?php echo $item['nama_penerbit']; ?>"><?php echo $item['nama_penerbit']; ?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-primary mt-4" type="submit">Tambah data buku</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>