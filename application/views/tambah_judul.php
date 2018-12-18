
<?php echo form_open('judul/process'); ?>
    <table>
        <tr>
            <td>Kode</td>
            <td>:</td>
            <td>
                <?php echo form_input('kode', '', 'required="required"') ?>
            </td>
        </tr>
        <tr>
            <td>Nama Judul</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'deskripsi', 'value' => '', 'required' => 'required')); ?>
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