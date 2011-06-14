<script src="<?php echo base_url();?>themes/backend/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>themes/backend/js/jquery/ui.checkbox.js" type="text/javascript"></script>

<script src="<?php echo base_url();?>themes/backend/js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $('input').checkBox();
        $('#toggle-all').click(function(){
            $('#toggle-all').toggleClass('toggle-checked');
            $('#mainform input[type=checkbox]').checkBox('toggle');
            return false;
        });
    });
</script>