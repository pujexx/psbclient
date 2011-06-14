<?php $this->load->view('backend/js_uicore'); ?>
<?php $this->load->view('backend/js_tooltip'); ?>
<div id="page-heading">
    <h1>Add Artikel</h1>

</div>
<script type="text/javascript">

    function delete_page(id,target){
        $(document).ready(function(){
            if(confirm("Apakah Anda yakin")){
                $.ajax({
                    type :"POST",
                    url :"<?php echo site_url('admin/page/deleteone') ?>",
                    data : "id="+id,
                    success :function(jos){

                    }
                });
                $("."+target).animate({ opacity: "hide" }, "slow");
            }
            return false;
        });
    }
</script>
<!-- end page-heading -->

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



                    <!--  start product-table ..................................................................................... -->
                    <form id="mainform" action="">

                        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                            <tr>
                                <th class="table-header-check"><a id="toggle-all" ></a> </th>
                                <th class="table-header-repeat line-left minwidth-1"><a href="">Judul</a>	</th>
                                <th class="table-header-repeat line-left minwidth-1"><a href="">Content</a></th>
                            
                               
                                <th class="table-header-repeat line-left"><a href="">Status</a></th>
                                <th class="table-header-options line-left"><a href="">Options</a></th>
                            </tr>
                            <?php foreach ($pages as $page): ?>
                                <tr class="pagelist<?php echo $page['id'] ?>">
                                    <td><input  type="checkbox"/></td>
                                    <td><?php echo $page['title'] ?></td>

                                    <td><?php echo word_limiter($page['content'], 10); ?></td>
                             
                                
                                    <td><?php
                                if ($page['aktif'] == 1) {
                                    echo "aktif";
                                } else {
                                    echo "Non aktif";
                                }
                            ?></td>
                                <td class="options-width">
                                    <a href="" title="Edit" class="icon-1 info-tooltip"></a>
                                    <a href="javascript:void(0);" title="Delete" class="icon-2 info-tooltip" onclick="delete_page(<?php echo $page['id'] ?>,'pagelist<?php echo $page['id'] ?>')"></a>


                                    <a href="" title="Edit" class="icon-5 info-tooltip"></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                                </table>
                                <!--  end product-table................................... -->
                            </form>
                        </div>
                        <div id="actions-box">
                            <a class="" href="<?php echo site_url('admin/page/newpage'); ?>">Halaman Baru</a>
                            <div class="clear"></div>
                        </div>
                        <!--  end content-table  -->

                        <!--  start actions-box ............................................... -->
                        <div id="actions-box">
                            <a href="" class="action-slider"></a>
                            <div id="actions-box-slider">
                                <a href="" class="action-edit">Aktif</a>
                                <a href="" class="action-edit">Non-Aktif</a>
                                <a href="" class="action-delete">Delete</a>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <!-- end actions-box........... -->

                        <!--  start paging..................................................... -->
                        <div class="pagination">
                    <?php echo $pagination; ?>
                </div>

                <!--  end paging................ -->

                <div class="clear"></div>

            </div>
            <!--  end content-table-inner ............................................END  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>
    <tr>
        <th class="sized bottomleft"></th>

        <td id="tbl-border-bottom">&nbsp;</td>
        <th class="sized bottomright"></th>
    </tr>
</table>

<div class="clear">&nbsp;</div>