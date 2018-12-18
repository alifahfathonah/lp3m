

<?php echo form_open('judul/process', '', array ('id' => $judul->id_judul)); ?>
    <table>
        <tr>
            <td>Kode</td>
            <td>:</td>
            <td>
                <?php echo form_input('kode', $judul->kode, 'required="required"') ?>
            </td>
        </tr>
        <tr>
            <td>Nama Judul</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'deskripsi', 'value' => $judul->deskripsi, 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                    <?php 
                    echo form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Edit')); 
                    ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>