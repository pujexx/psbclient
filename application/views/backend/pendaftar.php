<?php $this->load->view('backend/js_uicore'); ?>
<?php $this->load->view('backend/js_tooltip');?>
<div id="page-heading">
    <h1>Pendaftar</h1>

</div>

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
                                <th class="table-header-repeat line-left minwidth-1"><a href="">UAN</a>	</th>
                                <th class="table-header-repeat line-left minwidth-1"><a href="">Nama</a></th>
                                <th class="table-header-repeat line-left"><a href="">Asal Sekolah</a></th>

                          
                            </tr>
                            <?php foreach ($pendaftars as $pendaftar): ?>
                            <tr class="artikellist">
                                    <td><input  type="checkbox"/></td>
                                    <td><?php echo $pendaftar['id_pendaftar'] ?></td>

                                    <td><?php echo $pendaftar['nama_pendaftar']; ?></td>
                                    <td><?php echo $pendaftar['nama_sekolah_asal']; ?></td>
                            
                             
                            </tr>
                            <?php endforeach; ?>
                            </table>
                            <!--  end product-table................................... -->
                        </form>
                    </div>
                  <div id="actions-box">
                    
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