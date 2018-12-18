<?php echo form_open('mp/process'); ?>
    <table>
        <tr>
            <td>Kode Mutu</td>
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
                    echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); 
                    ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>