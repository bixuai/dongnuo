<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_2');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?></div>
<div class="content_inner  " style="position: relative; visibility: visible; display: block;">


<div class="title2">
<div class="title_holder" style="opacity: 1;">
<div class="container">
<div class="container_inner clearfix">
<h1 ><?php echo $cat['catname'];?></h1>
<span class="subtitle"><a href="<?php echo $_G['setting']['navs']['1']['filename'];?>"><?php echo $_G['setting']['navs']['1']['navname'];?></a> / <?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?> <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a> / <?php } ?>
<?php echo $cat['catname'];?></div>
</div>
</div>
</div>


<div class="container">
<div class="container_inner clearfix">


<div class="projects_holder_outer">
                                                                <?php if($cat['subs']) { ?>
                                                                <div class="filter_holder2">
                                                                <ul>
                            <li class="filter active"><span><?php echo $cat['catname'];?></span></li>
                                                                <?php if(is_array($cat['subs'])) foreach($cat['subs'] as $value) { ?><li class="filter"><a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a></li><?php $i--;?><?php } ?>
                                                                </ul>
                                                                </div>
                                                                <?php } ?>
                                                                <div class="projects_holder clearfix v3">
                                                                
                                                                <?php if(is_array($list['list'])) foreach($list['list'] as $value) { $highlight = article_title_style($value);?>                                                                <article style="display: inline-block; opacity: 1; " class="mix"><div class="image_holder"><span class="image"> <?php if($value['pic']) { ?><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="350" height="265"/><?php } else { ?><img src="template/xy_012/set/nopic.jpg" alt="<?php echo $value['title'];?>" width="350" height="265"/><?php } ?></span><span class="text_holder"><span class="text_outer"><span class="text_inner"><a rel="prettyPhoto[pretty_photo_gallery]" class="lightbox" title="Reduced Simplicity" <?php if($value['pic']) { ?>href="<?php echo $value['pic'];?>"<?php } else { ?>href="template/xy_012/set/nopic.jpg"<?php } ?> data-rel="prettyPhoto[pretty_photo_gallery]"><span></span></a><a class="preview" href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>"><span></span></a></span></span></span></div><div class="portfolio_description"><h5><a href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>" target="_blank" <?php echo $highlight;?>><?php echo $value['title'];?></a></h5></div></article>
<?php } ?>
<div class="filler"></div>
<div class="filler"></div>
<div class="filler"></div>
</div><div class="portfolio_paging"><?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?></div></div>
<div class="separator transparent" style="margin-top:25px;margin-bottom:25px;"></div>

</div>
</div>
</div>

</div><?php include template('common/footer'); ?>