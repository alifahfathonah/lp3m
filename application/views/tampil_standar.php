
<div style="margin-bottom: 20px;">
    <a href="<?=site_url('standar/tambah_standar');?>"><button class="btn">Tambah Standar</button></a>
</div>

<div>
    <table class="data" border="1px">       
        <tr>
            <th>No</th>
            <th>Kode Standar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td></td>
            <td>
                <form action="">
                    <input type="text" name="cari_kode_standar">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td>
                <form action="">
                    <input type="text" name="cari_deskripsi_standar">
                    <button class="btn">Cari</button>
                </form>
            </td>
            <td></td>
        </tr>
        <?php
        $no = 1;
            foreach ($standar as $b => $row) {
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$row->kode;?></td>
            <td><?=$row->deskripsi;?></td>
            <td>
                <a href="<?=site_url('standar/edit_standar/'.$row->id_standar);?>"><button class="btn">Edit</button></a> | 
                <a href="<?=site_url('standar/hapus_standar/'.$row->id_standar);?>" onclick="return confirm('Apakah kamu yakin ?')"><button class="btn">Hapus</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
