
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>PSB </title>
        <script type="text/javascript" src="<?php echo base_url();?>/themes/frontend/js/jquery.min.js"></script>
        <link href="<?php echo base_url() ?>themes/frontend/css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript">
          
            function loadpage(go,url,target){
                $(document).ready(function(){
                    $(target).hide();
                    $("#loading").show();
                    var page_target =({
                        page :go,
                        ajax :1
                    });
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: page_target,
                        dataType: "",
                        success: function(msg){
                            $('#loading').hide();   
                            //   alert(msg);
                      
                            $(target).html(msg);
                     
                            // $('#loading').css('visibility','hidden');
                              
                            $(target).fadeIn('slow'); 
                            $('html,body').animate({
                                scrollTop: $(target).offset().top},
                            'slow');
                            
                        }
                    });
                         
                });
            }
            function pendaftaran(url,target){
           
                $(document).ready(function(){
                    $('text1').html('Isikan data calon siswa dengan mengisi angket di bawah');
                    $(target).hide();
                    $("#loading").show();
                    kirim = ({
                        nouan: $('#nouan').val(),
                        nama:$('#nama').val(),
                        tempat_lahir: $('#tempat_lahir').val(),
                        tanggal_lahir:$('#tanggal_lahir').val(),
                        agama : $('#agama').val(),
                        alamat:$('#alamat').val(),
                        notelp: $('#notelp').val(),
                        sekolahasal :$('#sekolahasal').val(),
                        alamatsekolah:$('#alamatsekolah').val(),
                        tahunlulus: $('#tahunlulus').val(),                                     
                        nostl :$('#nostl').val(),
                        namawali :$('#namawali').val(),
                        alamatwali: $('#alamatwali').val(),
                        notelpwali:$('#notelpwali').val(),
                        pekerjaanwali: $('#pekerjaanwali').val(),
                        ajax_kirim :1
                    });
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: kirim,
                        dataType: "",
                        success: function(msg){
                          
                          //  alert($("#form_pendaftaran").serialize());
                            $('#loading').hide();   
                            //alert(msg);
                            //                      
                            $(target).html(msg);
                            //                     
                            //                        // $('#loading').css('visibility','hidden');
                            //                              
                            $(target).fadeIn('slow'); 
                            $('html,body').animate({
                                scrollTop: $(target).offset().top},
                            'slow');
                            
                        }
                    });
                          
                });
            }
        </script>
    </head>
    <body>

        <div id="wrapper">
            <div id="header" class="container">
                <div id="logo">
                    <h1><a href="#">PSB
                        </a></h1>
                    <p>Penerimaan Siswa Baru</p>
                </div>
                <?php $this->load->view('frontend/menu') ?>
            </div>
            <!-- end #header -->
            <div id="splash" class="container"><img src="<?php echo base_url() ?>themes/frontend/images/sd.jpg" width="1000" height="300" alt="" /></div>
            <div id="page" class="container">


                <div id="marketing">
                    <p class="text1">Penerimaan Siswa Baru tahun ajaran 2011</p>
                    <p class="text2"><a href="javascript:void(0);" onclick="loadpage('pendaftaran','<?php echo site_url(); ?>/front/page', '#content')" id="daftar">Daftar Sekarang</a></p>
                </div>

                <div id="loading" style="display: none">loading...</div>
                <div id="content">

                    <?php
                    if (!empty($content)) {
                        $this->load->view($content);
                    }
                    ?>
                    <!--		content	-->

                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->




                <div id="sidebar">
                    <ul>
                        <?php $this->load->view('frontend/search'); ?>

                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>




            </div>
            <!-- end #page -->







        </div>
        <div id="footer-content" class="container">
            <?php $this->load->view('frontend/footer'); ?>
        </div>
        <div id="footer">
            <p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
        </div>






        <!-- end #footer -->
    </body>
</html>
