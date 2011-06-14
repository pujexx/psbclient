<div id="menu">
    <ul>
        <li ><a href="<?php echo site_url(); ?>">Home</a></li>
        <li ><a href="<?php echo site_url('daftar'); ?>">daftar</a></li>
        <?php $pages= $this->page_model->get_all();?>
        <?php foreach ($pages as $page) {
 ?>
            <li ><a href="<?php echo site_url('page/select/'.$page['link']); ?>"><?php echo $page['name'];?></a></li>

<?php } ?>
    </ul>
</div>