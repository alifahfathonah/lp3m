
<?php echo form_open('mp/process', '', array ('id' => $mp->id_mp)); ?>
    <table>
        <tr>
            <td>Kode Mutu</td>
            <td>:</td>
            <td>
                <?php echo form_input('kode', $mp->kode, 'required="required"') ?>
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'deskripsi', 'value' => $mp->deskripsi, 'required' => 'required')); ?>
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