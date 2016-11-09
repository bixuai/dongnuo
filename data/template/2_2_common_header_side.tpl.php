<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<section class="side_menu right" style="overflow-y: hidden; visibility: visible;" tabindex="5000">
<div class="side_menu_title">
<h5>Side Menu</h5><a target="_self" href="#" class="close_side_menu"></a></div>
<div class="widget widget_search" id="search-3">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<div><label for="s" class="screen-reader-text">Search for:</label> <input type="text" name="srchtxt" id="s" placeholder="搜索"> <input type="submit" value="Search" id="searchsubmit"> 
</div></form></div>
<div class="widget widget_text" id="text-5">
<div class="textwidget">
<ul class="social_menu white">
   <?php include template('common/header_userstatus'); ?>    
</ul></div></div>
<div class="widget widget_text" id="text-4">
<div class="textwidget"><span class="icon_with_title small_icon"><a target="_self" href="portal.php"><span class="icon_holder small_icon" style="BORDER-BOTTOM-COLOR: #dddddd; BORDER-TOP-COLOR: #dddddd; BORDER-RIGHT-COLOR: #dddddd; BORDER-LEFT-COLOR: #dddddd"><span class="icon_inner" style="BACKGROUND-COLOR: #0c0c0c"><span class="icon white wall_clock_fill"></span></span></span><span class="icon_title" style="COLOR: #dddddd">首页</span></a></span> 
<div class="separator transparent" style="MARGIN-TOP: 5px; MARGIN-BOTTOM: 4px"></div><span class="icon_with_title small_icon"><a target="_self" href="home.php?mod=space&amp;do=friend"><span class="icon_holder small_icon" style="BORDER-BOTTOM-COLOR: #dddddd; BORDER-TOP-COLOR: #dddddd; BORDER-RIGHT-COLOR: #dddddd; BORDER-LEFT-COLOR: #dddddd"><span class="icon_inner" style="BACKGROUND-COLOR: #0c0c0c"><span class="icon white laptop_fill"></span></span></span><span class="icon_title" style="COLOR: #dddddd">好友</span></a></span> 
<div class="separator transparent" style="MARGIN-TOP: 5px; MARGIN-BOTTOM: 4px"></div><span class="icon_with_title small_icon"><a target="_self" href="forum.php?mod=guide&amp;view=my"><span class="icon_holder small_icon" style="BORDER-BOTTOM-COLOR: #dddddd; BORDER-TOP-COLOR: #dddddd; BORDER-RIGHT-COLOR: #dddddd; BORDER-LEFT-COLOR: #dddddd"><span class="icon_inner" style="BACKGROUND-COLOR: #0c0c0c"><span class="icon white globe_fill"></span></span></span><span class="icon_title" style="COLOR: #dddddd">贴子</span></a></span> 
<div class="separator transparent" style="MARGIN-TOP: 5px; MARGIN-BOTTOM: 4px"></div><span class="icon_with_title small_icon"><a target="_self" href="home.php?mod=space&amp;do=favorite&amp;view=me"><span class="icon_holder small_icon" style="BORDER-BOTTOM-COLOR: #dddddd; BORDER-TOP-COLOR: #dddddd; BORDER-RIGHT-COLOR: #dddddd; BORDER-LEFT-COLOR: #dddddd"><span class="icon_inner" style="BACKGROUND-COLOR: #0c0c0c"><span class="icon white rocket_fill"></span></span></span><span class="icon_title" style="COLOR: #dddddd">收藏</span></a></span> 
<div class="separator transparent" style="MARGIN-TOP: 5px; MARGIN-BOTTOM: 4px"></div><span class="icon_with_title small_icon"><a target="_self" href="home.php?mod=spacecp"><span class="icon_holder small_icon" style="BORDER-BOTTOM-COLOR: #dddddd; BORDER-TOP-COLOR: #dddddd; BORDER-RIGHT-COLOR: #dddddd; BORDER-LEFT-COLOR: #dddddd"><span class="icon_inner" style="BACKGROUND-COLOR: #0c0c0c"><span class="icon white configuration_fill"></span></span></span><span class="icon_title" style="COLOR: #dddddd">设置</span></a></span> 
<div class="separator transparent" style="MARGIN-TOP: 2px; MARGIN-BOTTOM: 2px"></div></div></div></section>