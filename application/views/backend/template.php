<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Internet Dreams</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>themes/backend/css/screen.css" type="text/css" media="screen" title="default" />

        <script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>


        <script src="js/jquery/custom_jquery.js" type="text/javascript"></script>


        <script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(document).pngFix( );
            });
        </script>
    </head>
    <body>
        <!-- Start: page-top-outer -->
        <div id="page-top-outer">

            <!-- Start: page-top -->
            <div id="page-top">

                <!-- start logo -->
                <div id="logo">
                    <a href=""><img src="<?php echo base_url(); ?>themes/backend/images/shared/logo.png" width="156" height="40" alt="" /></a>

                </div>
                <!-- end logo -->



                <div class="clear"></div>

            </div>
            <!-- End: page-top -->

        </div>
        <!-- End: page-top-outer -->

        <div class="clear">&nbsp;</div>

        <!--  start nav-outer-repeat................................................................................................. START -->
        <div class="nav-outer-repeat">
            <!--  start nav-outer -->

            <div class="nav-outer">
                <?php $this->load->view('backend/navright'); ?>        
              
                <?php $this->load->view('backend/menunav'); ?>
         

            </div>
            <div class="clear"></div>
            <!--  start nav-outer -->
        </div>

        <!--  start nav-outer-repeat................................................... END -->

        <div class="clear"></div>

        <!-- start content-outer ........................................................................................................................START -->
        <div id="content-outer">
            <!-- start content -->
            <div id="content">

                <?php if (!empty($content)): ?>
                <?php $this->load->view('backend/' . $content); ?>
                <?php endif; ?>

                </div>
                <!--  end content -->
                <div class="clear">&nbsp;</div>
            </div>
            <!--  end content-outer........................................................END -->

            <div class="clear">&nbsp;</div>

            <!-- start footer -->
        <?php $this->load->view('backend/footer'); ?>
        <!-- end footer -->

    </body>
</html>