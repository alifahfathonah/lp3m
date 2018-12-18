
<div style="margin-bottom: 20px;">
    <a href="<?=site_url('judul/add');?>"><button class="btn">Tambah Judul</button></a>
</div>

<div>
    <table class="data" border="1px">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Judul</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td></td>
            <td>
                <form action="">
                    <input type="text" name="cari_kode">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_deskripsi">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td></td>
        </tr>
        <?php
        $no = 1;
            foreach ($judul as $b => $row) {
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$row->kode;?></td>
            <td><?=$row->deskripsi;?></td>
            <td>
                <a href="<?=site_url('judul/edit/'.$row->id_judul);?>"><button class="btn">Edit</button></a> | 
                <a href="<?=site_url('judul/del/'.$row->id_judul);?>" onclick="return confirm('Apakah kamu yakin ?')"><button class="btn">Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
