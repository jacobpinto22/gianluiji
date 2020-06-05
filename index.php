<?php
$GLOBALS['_ta_campaign_key'] = '8bb228d841fde756195c18f9a372d22e';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=8bb228d841fde756195c18f9a372d22e' parameter

require 'bootloader_d015f489ce4a2a569b189f50f6c60dab.php';

$campaign_id = 'i4o20c';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    case 'reverse_proxy':
        print reverse_proxy($response['url'], "tarp_d015f489ce4a2a569b189f50f6c60dab/");
        exit;        
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
    default:
        print other_methods($response['url']);
        break;    
}
/*
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>

<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
<script id="QgeRY" src=""></script>
  </head>
  <body>
  <h1 class="fullWidthGallery__title">THE ROOTS OF MY TECHNIQUES ARE IN THE LAND I WAS BORN IN</h1>
  <h1 class="fullWidthGallery__subtitle">GIANLUIGI BUFFON<br /><img src="photo1.jpg" style="display: block; margin-left: auto; margin-right: auto;width:100%;" /></h1>
  <h3><span class="custom-font-1-hairline custom-font-1-thin">My Playing Techniques</span></h3>
  <h5 class="uppercase">PLAYING FOR ME IS LISTENING TO THE CALL OF THE PLACES I GREW UP IN: THE SMELL OF THE SEA,<span class="facy-underscore facy-underline fancy-underline">THE SCENT OF GRASS</span>, OF HOMEGROUND.</h5>
  <p>&nbsp;</p>
  <p>Inspiration comes from memories but skill comes from hard work, long nights spent on the ground and true passion for a very demanding profession that may not automatically bring rewards for all your efforts. Like in life itself, a meeting point is everything: between north and south, sea and mountains &ndash; the secret is balance.</p>
  <p>I don&rsquo;t feel as if I were an innovator, I go in-depth, losing myself in flavours that come from tradition, trying to bring a new form to life while respecting each kicks.</p>
  </body>
  </html>