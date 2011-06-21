<script type="text/javascript">
    
  
</script>
<div id="loading_daftar" style="display: none">loading...</div>
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
                <td><?php echo $dtr['total']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>