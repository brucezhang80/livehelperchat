<?php 
$iconsStatuses['restore_image_url'] = ($theme !== false && $theme->restore_image_url !== false && strpos($theme->restore_image_url, 'http') !== false);
$iconsStatuses['minimize_image_url'] = ($theme !== false && $theme->minimize_image_url !== false && strpos($theme->minimize_image_url, 'http') !== false);
$iconsStatuses['close_image_url'] = ($theme !== false && $theme->close_image_url !== false && strpos($theme->close_image_url, 'http') !== false);
$iconsStatuses['popup_image_url'] = ($theme !== false && $theme->popup_image_url !== false && strpos($theme->popup_image_url, 'http') !== false);
?>
this.iframe_html = '<div id="<?php echo $chatCSSLayoutOptions['container_id']?>" <?= isset($currentPosition['full_height']) && $currentPosition['full_height'] ? 'style="height:100%"' : '' ?>>' +
                              '<div id="<?php echo $chatCSSPrefix?>_header"><?php if ($theme === false || $theme->hide_close == 0) : ?><a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" id="<?php echo $chatCSSPrefix?>_close"><img src="<?php if ($iconsStatuses['close_image_url'] == false) : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php endif?><?php if ($theme !== false && $theme->close_image_url != '') : ?><?php echo $theme->close_image_url;?><?php else : ?><?php echo erLhcoreClassDesign::design('images/icons/cancel.png');?><?php endif;?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Close')?>" /></a><?php endif;?><?php if (erLhcoreClassModelChatConfig::fetch('disable_popup_restore')->current_value == 0 && ($theme === false || $theme->hide_popup == 0)) : ?>&nbsp;<a href="#" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" id="<?php echo $chatCSSPrefix?>_remote_window"><img src="<?php if ($iconsStatuses['popup_image_url'] == false) : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php endif; if ($theme !== false && $theme->popup_image_url != '') : ?><?php echo $theme->popup_image_url;?><?php else : ?><?php echo erLhcoreClassDesign::design('images/icons/application_double.png');?><?php endif;?>" alt="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Open in a new window')?>" /></a><?php endif; ?><a href="#" id="<?php echo $chatCSSPrefix?>_min" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Minimize/Restore')?>"></a><i title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','New messages')?>" id="<?php echo $chatCSSPrefix?>-msg-number"></i></div>' +
                              this.iframe_html + '</div>';
raw_css = "#<?php echo $chatCSSLayoutOptions['container_id']?>.<?php echo $chatCSSPrefix?>-min {overflow:hidden}.<?php echo $chatCSSPrefix?>-min #<?php echo $chatCSSPrefix?>_header{min-width:107px} .<?php echo $chatCSSPrefix?>-min #<?php echo $chatCSSPrefix?>_iframe_container{display:none} .<?php echo $chatCSSPrefix?>-no-transition{ -webkit-transition: none !important; -moz-transition: none !important;-o-transition: none !important;-ms-transition: none !important;transition: none !important;}\n#<?php echo $chatCSSLayoutOptions['container_id']?>.<?php echo $chatCSSPrefix?>-delayed{visibility:hidden}\n#<?php echo $chatCSSLayoutOptions['container_id']?> * {line-height:100%;direction:<?php (erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == 'ltr' || erConfigClassLhConfig::getInstance()->getOverrideValue('site', 'dir_language') == '') ? print 'ltr;text-align:left;' : print 'rtl;text-align:right;'; ?>;font-family:arial;font-size:12px;line-height:100%;box-sizing: content-box;-moz-box-sizing:content-box;padding:0;margin:0;}\n#<?php echo $chatCSSLayoutOptions['container_id']?> img {border:0;}\n#<?php echo $chatCSSPrefix?>_header{position:relative;z-index:9990;height:<?php ($theme !== false && $theme->header_height > 0) ? print $theme->header_height : print '17' ?>px;overflow:hidden;text-align:right;clear:both;background-color:#<?php $theme !== false ? print $theme->header_background : print '525252' ?>;padding:<?php ($theme !== false && $theme->header_padding > 0) ? print $theme->header_padding : print '5' ?>px;}#<?php echo $chatCSSPrefix?>-msg-number{float: left;color: #FFF;font-size: 12px;font-weight: bold;padding-left: 5px;line-height: 20px;} \n#<?php echo $chatCSSPrefix?>_min{float:left;padding:2px;}#<?php echo $chatCSSPrefix?>_remote_window,#<?php echo $chatCSSPrefix?>_close{padding:2px;float:right;}.<?php echo $chatCSSPrefix?>-min #<?php echo $chatCSSPrefix?>_min:before{content:url(<?php if ($iconsStatuses['restore_image_url'] == false) : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php endif; if ($theme !== false && $theme->restore_image_url != '') : ?><?php echo $theme->restore_image_url;?><?php else : ?><?php echo erLhcoreClassDesign::design('images/icons/restore.png');?><?php endif;?>)}#<?php echo $chatCSSPrefix?>_min:before{content: url('<?php if ($iconsStatuses['minimize_image_url'] == false) : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php endif; if ($theme !== false && $theme->minimize_image_url != '') : ?><?php echo $theme->minimize_image_url;?><?php else : ?><?php echo erLhcoreClassDesign::design('images/icons/min.png');?><?php endif;?>'); position: relative;left:0;top;0} #<?php echo $chatCSSPrefix?>_min{width:14px;height:14px;}\n#<?php echo $chatCSSPrefix?>_close:hover,#<?php echo $chatCSSPrefix?>_min:hover,#<?php echo $chatCSSPrefix?>_remote_window:hover{opacity:0.4;}\n#<?php echo $chatCSSLayoutOptions['container_id']?> {background-color:#FFF;-moz-user-select:none; -khtml-user-drag:element;cursor: move;cursor: -moz-grab;cursor: -webkit-grab;max-height: 100%;	overflow: auto;transition-property:height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;\nz-index:9990;\n position: fixed;<?php echo $currentPosition['position_body']?>;-webkit-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);-moz-box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);box-shadow: <?php echo $currentPosition['shadow']?> rgba(50, 50, 50, 0.17);-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }\n#<?php echo $chatCSSLayoutOptions['container_id']?> iframe{position:relative;display:block;transition-property: height;transition-duration: 0.4s;-webkit-transition: height 0.4s ease-in-out;transition: height 0.4s;}\n#<?php echo $chatCSSLayoutOptions['container_id']?> #<?php echo $chatCSSPrefix?>_iframe_container{border:<?php ($theme !== false && $theme->widget_border_width > 0) ? print $theme->widget_border_width : print '1' ?>px solid #<?php $theme !== false ? print $theme->widget_border_color : print 'cccccc' ?>;border-top: 0;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;overflow: hidden;}\n#<?php echo $chatCSSLayoutOptions['container_id']?> iframe.<?php echo $chatCSSPrefix?>-loading{\nbackground: #FFF url(<?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/general/loading.gif');?>) no-repeat center center; }\n@media only screen and (max-width : <?php ($theme !== false && $theme->widget_response_width > 0) ? print $theme->widget_response_width : print 640?>px) { .<?php echo $chatCSSPrefix?>-opened{position: fixed; overflow: hidden; right: 0px; left: 0px; top: 0px; bottom: 0px;} #<?php echo $chatCSSPrefix?>_header{height:30px;} #<?php echo $chatCSSPrefix?>_header a{padding:7px;}#<?php echo $chatCSSLayoutOptions['container_id']?>{position:fixed;left:0!important;right:0!important;bottom:0!important;top:0!important;border:0;border-radius:0}#<?php echo $chatCSSLayoutOptions['container_id']?> #<?php echo $chatCSSPrefix?>_iframe_container{border:0}#<?php echo $chatCSSLayoutOptions['container_id']?> iframe{width:100% !important} .<?php echo $chatCSSPrefix?>-min #<?php echo $chatCSSPrefix?>_header a{padding:2px;} #<?php echo $chatCSSLayoutOptions['container_id']?>.<?php echo $chatCSSPrefix?>-min{<?php echo $currentPosition['mobile_position']?>}}";