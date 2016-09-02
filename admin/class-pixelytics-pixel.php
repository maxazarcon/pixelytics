<?php

/**
 * Init Facebook Pixel
 *
 * @package    pixelytics
 * @subpackage pixelytics/admin
 * @since 1.2.1
 */


$pixel_id = get_option( 'pixel_id' );
?>
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');

	fbq('init', '<?php echo $pixel_id ?>');
	fbq('track', "PageView");

	<?php 
		if( checked( '1', get_option( 'pixel_lead_tracking' ), false ) )
			echo( "fbq('track', 'Lead');" );
		if( checked( '1', get_option( 'pixel_reg_tracking' ), false ) )
			echo( "fbq('track', 'CompleteRegistration');" );
	?>
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=<?php echo $pixel_id ?>&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
<?php
?>
