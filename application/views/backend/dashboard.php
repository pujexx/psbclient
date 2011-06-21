<div id="page-heading">
    <h1>Dashboard</h1>
</div>

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
                    <table border="1" cellpadding="20" cellspacing="20" width="60%" align="center" >
                        <tr>
                            <td class="menudashboard"><a href="<?php echo site_url('admin/artikel/newartikel');?>"><?php echo img("themes/backend/images/menu/icon-48-article-add.png"); ?><br/>Artikel Baru</a></td>
                            <td  class="menudashboard"><a href="<?php echo site_url('admin/artikel');?>"><?php echo img("themes/backend/images/menu/icon-48-content.png"); ?><br/>Semua Artikel</a></td>
                            <td  class="menudashboard"><a href="<?php echo site_url('admin/kategori');?>"><?php echo img("themes/backend/images/menu/icon-48-category.png"); ?><br/>Kategori</a></td>
                            <td class="menudashboard"><a href="<?php echo site_url('admin/page/newpage');?>"><?php echo img("themes/backend/images/menu/icon-48-article-add.png"); ?><br/>Halaman Baru</a></td>
                            <td  class="menudashboard"><a href="<?php echo site_url('admin/page');?>"><?php echo img("themes/backend/images/menu/icon-48-content.png"); ?><br/>Semua Halaman</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?php echo site_url();?>"><?php echo img("themes/backend/images/menu/NISN.png","width='90'"); ?><br/>Nama Pendaftar</a></td>
                             <td><a href="<?php echo site_url();?>"><?php echo img("themes/backend/images/menu/NISN.png"); ?><br/>Setting PSB</a></td>
                            <td><a href="<?php echo site_url();?>"><?php echo img("themes/backend/images/menu/icon-48-config.png"); ?></a></td>
                            <td><a href="<?php echo site_url();?>"><?php echo img("themes/backend/images/menu/icon-48-user.png"); ?><br/>User Account</a></td>
                            <td><a href="<?php echo site_url();?>"><?php echo img("themes/backend/images/menu/logout.png"); ?><br/>Logout</a></td>

                        </tr>
                       
                    </table>
                </div>
                <!--  end table-content  -->

                <div class="clear"></div>

            </div>
            <!--  end content-table-inner ............................................END  -->
        </td>
        <td id="tbl-border-right"></td>
    </tr>
</table>