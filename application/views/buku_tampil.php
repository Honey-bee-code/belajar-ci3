<div style="margin-bottom: 20px;">
    <a href="<?=site_url('buku/tambah');?>"><button class="btn">Tambah</button></a>
</div>

<table class="data" border="1">
    <tr>
        <th>No.</th>
        <th>Kode Buku</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Opsi</th>
    </tr>
    <?php
        $no = 1;
        foreach ($buku as $b => $row) { ?>
    <tr>
        <td><?=$no++;?></td>
        <td><?="BK".$row->id_buku;?></td>
        <td><?=$row->judul;?></td>
        <td><?=$row->pengarang;?></td>
        <td><?=$row->tahun_terbit;?></td>
        <td>
            <a href="<?=site_url('buku/edit/'.$row->id_buku);?>"><button class="btn">Edit</button></a>
            <a href="<?=site_url('buku/hapus/'.$row->id_buku);?>" onclick="return confirm('Yakinkah anda ingin menghapus data ini?')"><button class="btn">Hapus</button></a>
        </td>
    </tr>
    <?php
        } ?>
</table>
