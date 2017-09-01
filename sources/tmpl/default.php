<?php
/*------------------------------------------------------------------------
# mod_yet_another_google_plus_badge - Yet Another Google Plus Badges
# ------------------------------------------------------------------------
# author - Massimo di Primio Independent ICT Consultant
# Created - 2015-04-06
# copyright Copyright (C) 2015 diprimio.com. All Rights Reserved.
# license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.diprimio.com
# Technical Support:  Forum - http://www.diprimio.com/support.html
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die;
$profile_type = $params->get('profile_type');
$poweredby = $params->get('poweredby');
if ($profile_type == 'author') 
{
    $cl_type = 'g-person';
    $dat_ref = "//plus.google.com/". trim($params->get('google_profile_id'));
} 
elseif ($profile_type == 'publisher') 
{
    $cl_type = 'g-page';
    $dat_ref = "//plus.google.com/". trim($params->get('google_profile_id'));
}
else if ($profile_type == 'community')
{
    $cl_type = 'g-community';
    $dat_ref = "//plus.google.com/communities/" . trim($params->get('google_profile_id'));
}
else {
    $app = JFactory::getApplication();
    $app->enqueueMessage("»Module mod_yag_badge, configuration error: Cannot determine 'profile_type'", 'Error');
}
?>
<div class="<?php echo $cl_type; ?>" data-width="<?php echo trim($params->get('width'));?>" data-href="<?php echo $dat_ref;?>" data-theme="<?php echo $params->get('cover_theme');?>" data-layout="<?php echo $params->get('layout');?>" data-showtagline="<?php echo $params->get('tagline');?>" data-showcoverphoto="<?php echo $params->get('cover_photo');?>" data-rel="<?php echo $params->get('profile_type');?>"></div>
<div id="google-badge" style="width: 100%">

<script type="text/javascript"> 
window.___gcfg = {lang: 'en-US'};
document.getElementsByClassName('g-person')[0].setAttribute('data-width', document.getElementById('google-badge').clientWidth);
  (function() {
      var momo = '<?php echo $poweredby; ?>';
    var po = document.createElement('script'); 
    po.type = 'text/javascript'; 
    po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; 
    s.parentNode.insertBefore(po, s);
  })();
</script>
<?php if($poweredby == "true"){ ?>
   <div class="yagpb_sponsor" style="padding-left: 10px; color: #aaa; font-size:9px;position: relative; top: -18px;">Powered by: <a style="color: #aaa" href="http://www.diprimio.com/" title="Click here" target="_blank">www.diprimio.com</a></div>
<?php } ?>
</div>
