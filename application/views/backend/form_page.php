
<div id="page-heading"><h1>Artikel Baru</h1></div>
<?php $this->load->view('backend/js_tinymce'); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $("#title_page").blur(function(){
            var title= $("#title_page").val();

            var gabung = title.split(' ').join('-');
            $("#link_gabung").html("<p>Link : <?php echo site_url();?>/page/select/"+gabung+".html</p>");
        });
    });
    function kirim_page(){

        $(document).ready(function(){

            kirim =({
                name: $("#nama").val(),
                title : $("#title_page").val(),
                content :tinyMCE.get('content_page').getContent(),
                status : $("#status").val(),
                id : $("#id_page").val(),
                ajax :1
            });

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/page/submitupdate'); ?>",
                data: kirim,
                dataType: "",
                success: function(msg){

                    $("#content").html(msg);
                    $("#content").fadeIn('slow');
                    $('html,body').animate({
                        scrollTop: $("#content").offset().top},

                    'slow');

                }
            });
        });
    }
</script>
<?php echo form_open('admin/artikel/newartikel', 'name=artikelform'); ?>
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
            <!--  start content-table-inner -->
            <div id="content-table-inner">

                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                    <tr valign="top">
                        <td>


                            <!--  start step-holder -->
                            <div id="step-holder">
                                <div class="step-no">0</div>
                                <div class="step-dark-left"><a href="">Halaman Baru</a></div>

                                <div class="clear"></div>
                            </div>
                            <!--  end step-holder -->

                            <!-- start id-form -->
                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                <tr>
                                    <th valign="top">Nama Halaman</th>
                                    <td><input type="text" class="inp-form"  name="nama" id="nama" value="<?php echo $page['name']?>"/></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign="top">Judul Halaman</th>
                                    <td><input type="text" class="inp-form"  name="judul" id="title_page" value="<?php echo $page['title'];?>"/><p id="link_gabung" style="color: red;"></p></td>
                                    <td ></td>
                                </tr>

                                <tr>
                                    <th valign="top">Content</th>
                                    <td> <textarea name="content_page" id="content_page"><?php echo $page['content'];?></textarea></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th valign="top">Status</th>
                                    <td><select  class="styledselect_form_1" name="status" id="status">

                                            <option value="1" <?php if($page['aktif']==1){echo "selected";}?> >Aktif</option>
                                            <option value="0" <?php if($page['aktif']==1){echo "selected";}?>>Non Aktif</option>
                                        </select></td>
                                    <td></td>
                                </tr>


                                <tr>
                                    <th><input type="hidden" id="id_page" name="id_page" value="<?php echo $page['id'];?>"></th>
                                    <td valign="top">
                                        <input type="button" value="Submit" class="form-submit" onclick="kirim_page()"/>
<!--                                                <input type="button" value="" class="form-submit" onclick="kirim_artikel()"/>-->
                                        <input type="reset" value="" class="form-reset"  />
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            <?php echo form_close(); ?>
                            <!-- end id-form  -->

                        </td>
                        <td>

                            <!--  start related-activities -->

                            <!-- end related-activities -->

                        </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo base_url(); ?>themes/backend/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
                        <td></td>
                    </tr>
                </table>

                <div class="clear"></div>


            </div>
            <!--  end content-table-inner  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>
    <tr>
        <th class="sized bottomleft"></th>
        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
    </tr>
</table>


