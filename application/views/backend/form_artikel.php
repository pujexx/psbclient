
<div id="page-heading"><h1>Artikel Baru</h1></div>
<?php $this->load->view('backend/js_tinymce'); ?>
<script type="text/javascript">
    function kirim_artikel_update(){

        $(document).ready(function(){
        
            kirim =({
                judul: $("#judul").val(),
                artikel :tinyMCE.get('artikel').getContent(),
                kategori : $("#kategori").val(),
                status : $("#status").val(),
                ajax :1,
                id :document.artikelform.id.value
            });

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/artikel/submitupdate'); ?>",
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
                                <div class="step-dark-left"><a href="">Artikel Baru</a></div>

                                <div class="clear"></div>
                            </div>
                            <!--  end step-holder -->

                            <!-- start id-form -->
                            <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                                <tr>
                                    <th valign="top">Judul Artikel</th>
                                    <td><input type="text" class="inp-form"  name="judul" id="judul" value="<?php echo $artikel['title'] ?>"/></td>
                                    <td></td>
                                </tr>
                                <?php if (!empty($kategories)): ?>
                                    <tr>
                                        <th valign="top">Kategori</th>

                                        <td>
                                            <select  class="styledselect_form_1" name="kategori" id="kategori">
                                            <?php foreach ($kategories as $kategori): ?>
                                                <option value="<?php echo $kategori['id_kategori'] ?>" <?php if ($artikel['id_kategori'] == $kategori['id_kategori']) {
                                                    echo "selected";
                                                } ?>><?php echo $kategori['kategori'] ?></option>
<?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
<?php endif; ?>
                                                <tr>
                                                    <th valign="top">Artikel</th>
                                                    <td> <textarea name="artikel" id="artikel"><?php echo $artikel['content'] ?></textarea></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th valign="top">Status</th>
                                                    <td><select  class="styledselect_form_1" name="status" id="status">

                                                            <option value="1" <?php if ($artikel['aktif'] == 1) {
                                                    echo "selected";
                                                } ?>>Aktif</option>
                                                            <option value="0"  <?php if ($artikel['aktif'] == 0) {
                                                    echo "selected";
                                                } ?>>Non Aktif</option>
                                                        </select></td>
                                                    <td></td>
                                                </tr>


                                                <tr>
                                                    <th><?php echo form_hidden('id', $artikel['id'], 'id=id_artikel'); ?></th>
                                                    <td valign="top">
                                                       
                                                        <input type="button" value="" class="form-submit" onclick="kirim_artikel_update()"/>
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


