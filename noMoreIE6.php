<?php
/*
Plugin Name: NoMoreIE6
Plugin URI: http://www.wdmac.com/wp-plugins/nomoreie6
Description: Adds a browser dependent upgrade-message to the website header explainig the risks of using IE6 and providing links to upgrade to a recent browser.
Author: Miguel Azevedo e Castro
Version: 1.2
Author URI: http://www.wdmac.com/
*/

/* ==================== */
function NoMoreIE6() {
	echo '
			<!--[if lt IE 7]>
			<div style="border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;">
				<div style="position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;">
  				<a href="\#" onclick="javascript:this.parentNode.parentNode.style.display=\'none\'; return false;"> <img src="' . plugins_url("nomoreie6/ie6nomore-cornerx.jpg") . '" style="border: none;" alt="Close this warning"/></a></div>
  				<div style="width:800px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;">
   				<div style="width: 55px; float: left;"><img src="' . plugins_url("nomoreie6/warning.jpg") . '" alt="WARNING!" style="height:45px; width:45px; position:relative; top:14px;" /></div>
    			<div style="width: 500px; float: left; font-family: Arial, sans-serif;">
				<div style="font-size: 14px; font-weight: bold; margin-top: 12px;">You are using an outdated browser that compromises the security of your computer, and limits your internet browsing experience.</div>
    			<div style="font-size: 12px; margin-top: 6px; line-height: 12px;">We recommend you to do a free upgrade to one of the updated browsers bellow:</div>
    		</div>
    		<a href="http://www.mozilla.com/en-US/" target="_blank" style="float: left; width:48px; margin-top:15px;"><img src="' . plugins_url("nomoreie6/firefox.jpg") . '" style="border: none;" alt="Get Firefox 3.5"/></a> 
    		<a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=341c2ad5-8c3d-4347-8c03-08cdecd8852b&DisplayLang=pt-pt" target="_blank" style="float: left; width:48px; margin-top:15px;"><img src="' . plugins_url("nomoreie6/ie.jpg") . '"  style="border: none;" alt="Get Internet Explorer"/></a> 
    		<a href="http://www.apple.com/pt/safari/download/" target="_blank" style="float: left; width:48px; margin-top:15px;"><img src="' . plugins_url("nomoreie6/safari.jpg") . '" style="border: none;" alt="Get Safari"/></a> 
    		<a href="http://www.google.com/chrome?hl=pt-PT" target="_blank" style="float: left; width:48px; margin-top:15px;"><img src="' . plugins_url("nomoreie6/crome.jpg") . '" style="border: none;" alt="Get Google Chrome"/></a> 
    		<a href="http://www.opera.com/download/" target="_blank" style="float: left; width:48px; margin-top:15px;"><img src="' . plugins_url("nomoreie6/opera.jpg") . '" style="border: none;" alt="Get Opera Browser"/></a> </div>
		</div>
	<![endif]-->'; 
}

/* Let the magic begin
===================================================================== */
add_filter('wp_head', NoMoreIE6);

?>