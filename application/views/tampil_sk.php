
<div style="margin-bottom: 20px;">
    <a href="<?=site_url('sk/add');?>"><button class="btn">Tambah SK</button></a>
</div>

<div>
    <table class="data" border="1px">
        <tr>
            <th>#</th>
            <th>No </th>
            <th>Nama </th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td></td>
            <td>
                <form action="">
                    <input type="text" name="cari_no">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_nama">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_deskripsi">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_tanggal">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_file">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td></td>
        </tr>
        <?php
        $no = 1;
            foreach ($sk as $b => $row) {
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$row->no_sk;?></td>
            <td><?=$row->nama_sk;?></td>
            <td><?=$row->deskripsi;?></td>
            <td><?=$row->tanggal_sk;?></td>
            <td><?=$row->file;?></td>
            <td>
                <a href="<?=site_url('sk/see/'.$row->id_sk);?>"><button class="btn">Lihat</button></a> | 
                <a href="<?=site_url('sk/edit/'.$row->id_sk);?>"><button class="btn">Edit</button></a> | 
                <a href="<?=site_url('sk/download/'.$row->id_sk);?>"><button class="btn">Unduh</button></a> | 
                <a href="<?=site_url('sk/del/'.$row->id_sk);?>" onclick="return confirm('Apakah kamu yakin ?')"><button class="btn">Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
