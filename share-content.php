<?php
	$header_redes_sociales = get_field('header_redes_sociales','option');
	if($header_redes_sociales){
?>
	<?php $flex = get_query_var('flex'); ?>
    <ul class="list-none <?php echo $flex; ?>">
        <li>
            <a class="decoration-none" href="<?php echo $header_redes_sociales['twitter_url']; ?>" title="Twitter <?php bloginfo('name'); ?>" target="_blank">
                <i class="aprendiendoando-twitter"></i>
            </a>
        </li>
        <li>
            <a class="decoration-none" href="<?php echo $header_redes_sociales['facebook_url']; ?>" title="Facebook <?php bloginfo('name'); ?>" target="_blank">
                <i class="aprendiendoando-facebook"></i>
            </a>
        </li>
        <li>
            <a class="decoration-none" href="<?php echo $header_redes_sociales['youtube_url']; ?>" title="Youtube <?php bloginfo('name'); ?>" target="_blank">
                <i class="aprendiendoando-youtube"></i>
            </a>
        </li>
        <li>
            <a class="decoration-none" href="<?php echo $header_redes_sociales['rss_url']; ?>" title="RSS <?php bloginfo('name'); ?>" target="_blank">
                <i class="aprendiendoando-rss"></i>
            </a>
        </li>
    </ul>
<?php
    }
?>
