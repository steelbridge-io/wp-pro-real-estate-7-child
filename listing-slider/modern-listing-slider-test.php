<?php
/*_*_*_*_*_*_

Custom property slider for almosthomeusaa
By steelbrideg.io
chris@steelbridge.io

NOTE:
Navigate to slides by searching number slide number as #1 = First Slide, #T1 1st thumbnail slide

_*_*_*_*_*_*/

//if (!empty($ah_custom_image_slider_1)) {
 // Contains the entire slider. If First Slide isn't published, slider won't replace originial.
 
 function listing_slider_shortcode() {
 $string = '';
 $string .= 'Message';
 
 return $string; } //if container. If image one isn't loaed, the slider won't show.
 
 add_shortcode('listing-slider', 'listing_slider_shortcode');
 
//}


