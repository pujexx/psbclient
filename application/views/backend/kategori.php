<div id="page-heading">
    <h1>Kategori</h1>
</div>
<script type="text/javascript">
    function cek(){
        $(document).ready(function(){
            if($('#kategori_data').val() !=''){
                $('#kategori_submit').removeAttr("disabled",'');
            }
            else {
                 $('#kategori_submit').attr("disabled",'disabled');
            }
        });
    }
    function tambah(){
        $(document).ready(function(){
         
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('admin/kategori/submitkategori') ?>",
                data:'kategori='+$('#kategori_data').val(),
                success : function (msg){
                    $("#categori_list").html(msg);
                }
            });
            // $("#kategori_list").prepend("<li>"+$('#kategori_data').val()+"</li>");
            $('#kategori_data').val('');
           
        });
    }
    function delete_kategori(id,target){
        $(document).ready(function(){
            if(confirm('Apakah yakin')){
                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('admin/kategori/deleteone') ?>",
                    data:'id='+id,
                    success : function (msg){
                        $(target).hide();
                    }
                });
            }
       
        });
    }
    function edit_kategori(id,kategori){
        $(document).ready(function(){
            //alert('jos');
          
            $('#kategori_data').val(kategori);
            $('#kategori_submit').attr('disabled',"disabled");
            $('#kategori_update').removeAttr("disabled",'');
            $('#kategori_update').attr("name",id);
           
        });
       
    }
    function update_kategori(){
        $(document).ready(function(){
            var id_kategori= $('#kategori_update').attr("name");
           
            kategori_data = ({id:id_kategori,kategori : $('#kategori_data').val()});
            $.ajax({
                type:"POST",
                url :"<?php echo site_url('admin/kategori/submitupdate') ?>",
                data:kategori_data,
                success : function(msg){
                    $('#kategori_data').val('');
                    $("#categori_list").html(msg);
                    // $('.list_kategori_'+id_kategori).html($('#kategori_data').val());
                    $('#kategori_submit').removeAttr('disabled', "");
                    $('#kategori_update').attr('disabled',"disabled");
           
                }
            });
        });
    }
</script>
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
    <tr>
        <th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>themes/backend/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
        <th class="topleft"></th>
        <td id="tbl-border-top">&nbsp;</td>
        <th class="topright"></th>

        <th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>themes/backend/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
    </tr>
    <tr>
        <td id="tbl-border-left"></td>
        <td>
            <!--  start content-table-inner ...................................................................... START -->
            <div id="content-table-inner">

                <!--  start table-content  -->
                <div id="table-content">
                    <?php echo form_open(); ?>
                    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                        <tr>
                            <th valign="top">Kategori</th>
                            <td><input type="text" class="inp-form"  name="kategori_data" id="kategori_data" onblur="cek()"/></td>
                            <td><input type="button"  value="Submit" onclick="tambah();" id="kategori_submit" disabled><input type="button"  value="Update" name="jos" onclick="update_kategori();" id="kategori_update" disabled></td>
                        </tr>
                    </table>
                    <?php echo form_close(); ?>
                    <div id="categori_list">
                        <ul id="kategori_list">
                            <?php foreach ($kategories as $kategori) {
                            ?>
                            <?php echo "<li class='list_kategori_" . $kategori['id_kategori'] . "'>"; ?>
                                <a href="#" onclick="delete_kategori(<?php echo $kategori['id_kategori'] ?>,'.list_kategori_<?php echo $kategori['id_kategori'] ?>')">Delete</a>|<a href="#" onclick="edit_kategori('<?php echo $kategori['id_kategori'] ?>','<?php echo $kategori['kategori']; ?>');">Edit</a>
                            <?php echo $kategori['kategori'] . "</li>"; ?>

                            <?php } ?>

                        </ul>
                    </div>
                </div>
                <!--  end table-content  -->

                <div class="clear"></div>

            </div>
            <!--  end content-table-inner ............................................END  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>
</table>