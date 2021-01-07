<?php echo form_open('buku/proses'); ?>
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td>
                <?php echo form_input('judul', '', 'required'); ?>
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>
                <?php echo form_input('pengarang', '', 'required'); ?>
            </td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'number', 'name' => 'tahun_terbit', 'required' => 'true')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <?php echo form_input(array('class' => 'btn', 'type' => 'submit', 'name' => 'tambah', 'value' => 'Tambah')); ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>