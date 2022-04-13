<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kebutuhan Buku</h5>
                <h6 class="card-subtitle mb-2 text-muted">Buku dengan stok terendah</h6>

                <p>Berikut adalah daftar buku dengan stok terendah yang sebaiknya segera dibeli lagi.</p>

                <table class="table">
                    <tr>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Stock</th>
                    </tr>

                    <?php foreach (array_slice($lowstock, 0, 3) as $item) { ?>
                        <tr>
                            <td><?php echo $item['nama_buku'] ?></td>
                            <td><?php echo $item['nama_penerbit'] ?></td>
                            <td><?php echo $item['stok'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>