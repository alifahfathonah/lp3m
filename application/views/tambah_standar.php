
<?php echo form_open('standar/proses_standar'); ?>
    <table>
        <tr>
            <td>Kode Standar</td>
            <td>:</td>
            <td>
                <?php echo form_input('kode', '', 'required="required"') ?>
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
            <td></td>
            <td></td>
            <td>
                    <?php 
                    echo form_input(array('type' => 'submit', 'name' => 'tambah_standar', 'value' => 'Tambah')); 
                    ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>