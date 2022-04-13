<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="card">

            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>

            <div class="card-body">
                <h5 class="card-title">Selamat datang di halaman admin!</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted">Add, edit dan delete untuk buku.</h6>
                <hr>
                <a href="<?php echo base_url('admin/add') ?>" class="btn btn-primary">Add Data</a>
                <hr>
                <table class="table">
                    <tr>
                        <th>ID Buku</th>
                        <th>Kategori</th>
                        <th>Nama Buku</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Nama Penerbit</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo $item['id_buku'] ?></td>
                            <td><?php echo $item['kategori'] ?></td>
                            <td><?php echo $item['nama_buku'] ?></td>
                            <td><?php echo $item['harga'] ?></td>
                            <td><?php echo $item['stok'] ?></td>
                            <td><?php echo $item['nama_penerbit'] ?></td>
                            <td>
                                <a href="admin/edit/<?php echo $item['id_buku']; ?>" class="btn btn-warning">Edit</a>
                                <a href="admin/delete/<?php echo $item['id_buku']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <div class="card-body">
                <h5 class="card-title">Admin Penerbit</h5>
                <h6 class="card-subtitle mt-2 mb-2 text-muted">Add, edit dan delete untuk penerbit.</h6>
                <hr>
                <table class="table">
                    <tr>
                        <th>ID Penerbit</th>
                        <th>Nama Penerbit</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($penerbit as $item) { ?>
                        <tr>
                            <td><?php echo $item['id_penerbit'] ?></td>
                            <td><?php echo $item['nama_penerbit'] ?></td>
                            <td><?php echo $item['alamat'] ?></td>
                            <td><?php echo $item['kota'] ?></td>
                            <td><?php echo $item['telepon'] ?></td>
                            <td>
                                <a href="admin/editpenerbit/<?php echo $item['id_penerbit']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>