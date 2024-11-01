<?php
/*
Plugin Name: Toolbar to Share
Plugin URI: https://www.codifica.me/toolbar-to-share/
Description: This plugin shows sharing buttons for Facebook, Twitter  in a little Toolbar.
Version: 2.0 
Author: Miguel Berlanga, Yolanda Jimenez, Eva Romero
Author URI: https://www.codifica.me/toolbar-to-share/
*/


if(isset($_REQUEST["texto_cuerpo"])){  
  $dato_toolbar2 = $_REQUEST["texto_cuerpo"];
  update_option('textocuer_toolbar',$dato_toolbar2);
}

if(isset($_REQUEST["radio_publi_toolbar"])){  
    $dato_toolbar3 = $_REQUEST["radio_publi_toolbar"];
    update_option('publi_toolbar',$dato_toolbar3);
  
}
if(isset($_REQUEST["facebook_toolbar"]) ){  
  $dato_toolbar4 = $_REQUEST["facebook_toolbar"];
  update_option('facebook_toolbar',$dato_toolbar4);
}    

if(isset($_REQUEST["twitter_toolbar"])){  
  $dato_toolbar5 = $_REQUEST["twitter_toolbar"];
  update_option('twitter_toolbar',$dato_toolbar5);
}


 
function  menu_toolbar_comparte (){
add_menu_page("Toolbar to share", "Toolbar to share", 10, "plugin_toolbar_comparte", "web_plugin_toolbar_share");
}

function web_plugin_toolbar_share(){	
add_option('cabecera_toolbar', 'Sharing our website, you will help us with the maintenance. Thank you!'); 
add_option('textocuer_toolbar', ' Click on any of these buttons to help us to maintain this website.'); 
add_option('facebook_toolbar', 'Facebook User'); 
add_option('twitter_toolbar', 'Twitter User'); 
add_option('publi_toolbar', 'Si'); 
 

$texto_cabecera1_toolbar = get_option('cabecera_toolbar');
$texto_cuerpo1_toolbar   = get_option('textocuer_toolbar');

$facebook1_toolbar= get_option('facebook_toolbar');
$twitter1_toolbar= get_option('twitter_toolbar');
$google1_toolbar= get_option('google_toolbar');
$publi_toolbar1_toolbar = get_option('publi_toolbar');


echo "<div class='wrap'> 
<h2>Welcome to \"Toolbar to share\" </h2>


<div style=\"margin:auto;
position:relative;
width:750px;
height:685px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
line-height: 24px;
font-style: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);\"> 
<form action=\"#\" method=\"post\" id=\"form2\">
<font style=\"font-style: bold; font-weight: bold; font-size: 30px; \">Configuration Pannel</font>

<p>This plugin let your followers share the content of your website with their friends through the different social networks.

This panel let you edit the text which appears on the toolbar. This text could show a message for your readers explaining the importance of sharing you site in the social networks. 

Furthermore, in this panel you can personalize the plugin with your Facebook, Twitter and Google plus user account.</p>

<font style=\"font-style: bold; font-weight: bold;\">Body or message text:</font> <input type=\"text\" name=\"texto_cuerpo\" id=\"valor2\" value=\"$texto_cuerpo1_toolbar\" style=\"width:740px; margin: 0 0 0 10px;display:block; border: 1px solid #999; height: 25px; -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);\"/>
<font style=\"display: block;margin: 0 0 0px 10px;padding: 1px 3px; font-size: 88%;\">This is the text that show your body popup, i.e explain about that, credits, thanks...</font>

<font style=\"font-style: bold; font-weight: bold;\">Facebook user:</font><input type=\"text\" name=\"facebook_toolbar\" id=\"valor3\" value=\"$facebook1_toolbar\" style=\"width:740px; margin: 0 0 0 10px;display:block; border: 1px solid #999; height: 25px; -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);\"/>
<font style=\"display: block;margin: 0 0 0px 10px;padding: 1px 3px; font-size: 88%;\">You must write your Facebook acount , i.e .. www.facebook.com/FACEBOOK_ACOUNT</font>

<font style=\"font-style: bold; font-weight: bold;\">Twitter user:</font> <input type=\"text\" name=\"twitter_toolbar\" id=\"valor4\" value=\"$twitter1_toolbar\" style=\"width:740px; margin: 0 0 0 10px; display:block; border: 1px solid #999; height: 25px; -webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3); box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);\"/>
<font style=\"display: block;margin: 0 0 0px 10px;padding: 1px 3px; font-size: 88%;\">You must write your Twitter acount , i.e .. www.twitter.com/TWITTER_ACOUNT</font>

";
if ($publi_toolbar1_toolbar == 'Si'){
echo"
<font style=\"font-style: bold; font-weight: bold;\">Help us to continuous developing plugins by showing our credit link (Thank you)</font></br>

<input type=\"radio\" name=\"radio_publi_toolbar\" value=\"Si\" style=\"margin: 0 0 0 15px\" checked/>Yes, I want to include the credit link.  <br />
<input type=\"radio\" name=\"radio_publi_toolbar\" value=\"No\" style=\"margin: 0 0 0 15px\"/>No, I preffer do not show the credit link in my site. 
"; }
else{
echo"
<font style=\"font-style: bold; font-weight: bold;\">Show our link Powered by CodigoJavaOracle</font></br>
<input type=\"radio\" name=\"radio_publi_toolbar\" value=\"Si\" style=\"margin: 0 0 0 15px\" /> Yes, I allowed a credit link.<br />
<input type=\"radio\" name=\"radio_publi_toolbar\" value=\"No\" style=\"margin: 0 0 0 15px\" checked/> No, I preffer don´t show that.

 ";}
echo "


<INPUT type=\"submit\"  value=\"Save\" style=\"width:100px;
position:absolute;
right:350px;
bottom:10px;
background:#09C;
color:#fff;
font-family: Tahoma, Geneva, sans-serif;
height:30px;
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
border: 1p solid #999;\"> 
   
</form>
</div> 

</div>";

} 
 
function add_stylesheet() {
wp_enqueue_style('toolbartoshare-css', plugin_dir_url(__FILE__) . 'toolbartoshare.css');
} 

function enqueue_my_scripts(){
wp_enqueue_script( 'toolbartoshare.js', plugin_dir_url(__FILE__) . 'toolbartoshare.js');
wp_enqueue_script('google-plusone', 'https://apis.google.com/js/plusone.js', array(), null);
}
  
add_action("admin_menu","menu_toolbar_comparte");

add_action('wp_print_styles', 'add_stylesheet');

add_action( 'wp_print_scripts', 'enqueue_my_scripts');


add_Action("the_content","banner_ayuda_wordpress");
//add_action("the_content", "banner_ayuda_wordpress");


function banner_ayuda_wordpress($content){
 
 $cabecera_toolbar = get_option('cabecera_toolbar');
 $cuerpo_toolbar   = get_option('textocuer_toolbar');
 $publi_toolbar1_toolbar = get_option('publi_toolbar');
 $elpermalink_toolbar = get_option ('siteurl'); // imagen
 $elpermalink_toolbarg = get_option ('google_toolbar');
 $elpermalink_toolbarf = get_option ('facebook_toolbar'); // Facebook
 $elpermalink_toolbart = get_option ('twitter_toolbar'); // twitter
 $banner_toolbar	=	'  

 
    
 <div class="overboxtoolbar" id="over"> 
  <div align="center" style="position:relative;"> <font style="line-height:32px; vertical-align:top;">' . $cuerpo_toolbar . '     
  
  </font>
    
    <!--Facebook1 -->

 &nbsp&nbsp

<iframe src="https://www.facebook.com/plugins/like.php?href=http://'. $elpermalink_toolbarf .'
&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; line-height:20px; margin:5px 15px 0 0; width:130px; height:20px"></iframe>
  

 <!--Follow me twitter -->
 <a href="https://twitter.com/'. $elpermalink_toolbart .'" class="twitter-follow-button" data-show-count="false" data-lang="en">Seguir a @'. $elpermalink_toolbart .'</a>
 
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>

&nbsp&nbsp

   ';
  
  if ($publi_toolbar1_toolbar == 'Si'){  
      if (is_front_page()){
         $banner_toolbar= $banner_toolbar . '  
            <div id="divletra" class="divletra">
            <a href="https://hotelesqueadmitenperros.com/" title="hoteles que admiten mascotas" target="_blank">Hoteles que admiten mascotas</a>
            </div>';
      }

} 

   $banner_toolbar= $banner_toolbar .'       
   <div id="divimagen" class="divimagen">
<a border="0" href="javascript:hideLightbox();">
<img border="0" style="border:0px; background:0;" alt="X" title="Close" src="'. $elpermalink_toolbar .'/wp-content/plugins/toolbar-to-share/close.jpg">
</a>
</div>

 </div></div> ';
    
  $content	=	$content . $banner_toolbar;
  return $content;
}
?>