<script type="text/javascript">
    function input_nilai(){
        $(document).ready(function(){
          
            $("#content").hide();
            $("#loading").show();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('front/submit_nilai'); ?>",
                data: $("#nilai").serialize(),
                dataType: "",
                success: function(msg){
                    $('#loading').hide();   
                    //alert(msg);
                    //                      
                    $("#content").html(msg);
                    //                     
                    //                        // $('#loading').css('visibility','hidden');
                    //                              
                    $("#content").fadeIn('slow'); 
                    $('html,body').animate({
                        scrollTop: $("#content").offset().top},
                    'slow');
                            
                }
            });
        });
    }
</script>
<table border="0">
    <?php echo form_open('front/submit_nilai', 'id=nilai') ?>
    <?php foreach ($matapelajaran as $mapel) { ?>
        <tr>
            <td><?php echo $mapel['nama_mata_pelajaran'] ?></td>
            <td><?php echo form_input("nilai_".$mapel['kode_mata_pelajaran']); ?></td>
        </tr>
    <?php } ?> 

    <tr>
        <td>
        </td>
        <td>
            <input type="button" value="Simpan" onclick="input_nilai();"/>
        </td>
    </tr>
    
</table>
<?php echo form_close();?>
