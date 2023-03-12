<a href="dashboard.php?pages=buku&act=tambah" class="btn btn-success mb-3">Tambah Buku</a>
<?php

?>
<table class="table border shadow">
    <tr class="bg-primary text-white">
        <td>No</td>
        <td>Judul Buku</td>
        <td>Deskripsi</td>
        <td>Penulis</td>
        <td>Penerbit</td>
        <td>Gambar</td>
        <td>Aksi</td>
    </tr>
        <?php
        $i = 1;
        foreach ($data->list_buku() as $u){
            ?>
             <tr>
                <td><?=$i++?></td>
                <td><?=$u->judul_buku?></td>
                <td><?=$u->deskripsi?></td>
                <td><?=$u->penulis?></td>
                <td><?=$u->penerbit?></td>
                <td><img src="assets\img\gambar\<?=$u->gambar?>" width=160 alt=""></td>
                <td>
                    <a href="dashboard.php?pages=buku&act=ubah&id=<?=$u->buku_id?>" class='btn btn-primary'>Ubah</a>
                    <a href="routes/proses.php?act=hapus_buku&id=<?=$u->buku_id?>" class='btn btn-danger' onclick='return confirm("Apakah anda ingin menghapus data ini?")'>Hapus</a>
                </td>
            </tr>
            <?php
    }

        ?>
</table>