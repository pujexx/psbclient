<script type="text/javascript">
    
  
</script>
<div id="list_daftar">
    <table border="1" width="100%" >
        <tr>
            <td>Nomer UAN</td>
            <td>Nama</td>
            <td>NIP Komulatif</td>
        </tr>
        <?php foreach ($daftar as $dtr): ?>

            <tr>
                <td><?php echo $dtr['id_pendaftar'] ?></td>
                <td><?php echo $dtr['nama_pendaftar']; ?></td>
                <td><?php
            $nilai = $this->seleksi_model->get_nilai($dtr['id_pendaftar']);
            echo $nilai['nilai'];
        ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>