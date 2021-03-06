<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat datang di halaman utama!</h5>
                <h6 class="card-subtitle mb-2 text-muted">Isi halaman ini data buku yang ada dan search function.</h6>

                <table class="display" id="tabelbuku">
                    <thead>
                        <tr>
                            <th>ID Buku</th>
                            <th>Kategori</th>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Nama Penerbit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id_buku'] ?></td>
                                <td><?php echo $item['kategori'] ?></td>
                                <td><?php echo $item['nama_buku'] ?></td>
                                <td><?php echo $item['harga'] ?></td>
                                <td><?php echo $item['stok'] ?></td>
                                <td><?php echo $item['nama_penerbit'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tabelbuku').DataTable();
    });
</script>

</body>

</html>