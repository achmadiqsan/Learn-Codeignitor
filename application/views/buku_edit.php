<?php 

// echo "Ini Halaman Tambah Data";
// echo "<br>";
// echo base_url();
// echo "<br>";
// echo site_url();

echo form_open('buku/proses', '', array('id' => $buku->id_buku));

 ?>
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td>
                <?php echo form_input('judul',$buku->judul,'required="required"'); ?>
            </td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td>
                <?php echo form_input('pengarang',$buku->pengarang,'required="required"'); ?>
            </td>
        </tr>
        <tr>
            <td>Tahun Terbit</td>
            <td>:</td>
            <td>
                <?php echo form_input(array('type' => 'number', 'name' => 'tahun', 'value' => $buku->tahun_terbit, 'required' => 'required')); ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <?php echo form_input(array('type'=> 'submit', 'class' => 'btn', 'name' => 'edit', 'value' => 'Edit')); ?>
            </td>
        </tr>
    </table>
 <?php echo form_close(); ?>