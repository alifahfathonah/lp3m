<title><?=$header;?></title>


<!-- penambahan form hidden untuk di lempar ke model supaya id nya ketemu -->
<?php echo form_open('standar/proses_standar', '', array('id' => $standar->id_standar)); ?>
    <table>
        <tr>
            <td>Kode Standar</td>
            <td>:</td>
            <td>
                <?php echo form_input('kode', $standar->kode, 'required="required"') ?>
            </td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'text', 'name' => 'deskripsi', 'value' => $standar->deskripsi, 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <?php echo form_input(array('type' => 'submit', 'name' => 'edit_standar', 'value' => 'Edit')); ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>