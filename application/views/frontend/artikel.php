<?php $this->load->helper('tanggal'); ?>


<?php foreach ($artikels as $artikel): ?>
    <div class="post">
        <h2 class="title"><a href="<?php echo site_url('front/artikel/') ?>"><?php echo $artikel['title']; ?> </a></h2>
        <p class="meta"><span class="date"><?php echo tanggal_strip($artikel['tanggal']); ?></span></p>
        <div style="clear: both;">&nbsp;</div>
        <div class="entry">

        <?php echo word_limiter($artikel['content'],150); ?>

        <p class="links"><a href="#" class="more">Read More</a></p>
    </div>
</div>
<?php endforeach; ?>
<div class="pagination">
    <?php echo $pagination;?>
</div>
