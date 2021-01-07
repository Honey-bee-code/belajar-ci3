<title><?=$header; ?></title>

<?php echo form_open('buku/proses','', array('id' => $buku->id_buku)); ?>
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td>
                <?php echo form_input('judul', $buku->judul, 'required'); ?>
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>
                <?php echo form_input('pengarang', $buku->pengarang, 'required'); ?>
            </td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'number', 'name' => 'tahun_terbit', 'value' => $buku->tahun_terbit, 'required' => 'true')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <?php echo form_input(array('class' => 'btn', 'type' => 'submit', 'name' => 'edit', 'value' => 'Simpan')); ?>
            </td>
        </tr>
    </table>
<?php echo form_close(); ?>
