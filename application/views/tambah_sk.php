<?php echo form_open_multipart('sk/process_add'); ?>
    <table>
        <tr>
            <td>No SK</td>
            <td>:</td>
            <td>
                <?php echo form_input('no_sk', '', 'required="required"') ?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'nama_sk', 'value' => '', 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'deskripsi', 'value' => '', 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'date', 'name' => 'tanggal_sk', 'value' => '', 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td>File</td>
            <td>:</td>
            <td>
                <?php echo form_upload(array('file', '', 'name' => 'file_sk')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                    <?php 
                    echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); 
                    ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>