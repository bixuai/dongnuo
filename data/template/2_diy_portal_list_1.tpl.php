<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('list_1');?><?php include template('common/header'); $list = array();?><?php $wheresql = category_get_wheresql($cat);?><?php $list = category_get_list($cat, $wheresql, $page);?></div>
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
<div class="container_inner clearfix" style="padding-top:30px;">
<div class="blog_holder blog_small_layout">
 <?php $i = 0;?><?php if(is_array($list['list'])) foreach($list['list'] as $value) { ?> <?php $i++;?><?php $highlight = article_title_style($value);?><?php $news = C::t('portal_article_count')->fetch($value[aid]);?> 
<article class="standard">
<div class="post_info">
<div class="inner">
<div class="post_date">
<span class="date"><?php echo $i;?></span>
<span class="month">Num</span>
</div>
<div class="blog_like">
<a class="qode-like" href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>"><span class="qode-like-count"><?php echo $news['viewnum'];?></span></a>					</div>
<div class="blog_share"><span class="social_share_holder"><span class="social_share_icon"><?php echo $news['commentnum'];?></span></span></div>				</div>
</div>
<div class="post_content_holder">
<div class="post_image">
<div class="inner">
 <?php if($value['pic']) { ?><a href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>" target="_blank"><img src="<?php echo $value['pic'];?>" alt="<?php echo $value['title'];?>" width="300" height="230"/></a><?php } else { ?><a href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>" target="_blank"><img src="template/xy_012/set/nopic.jpg" alt="<?php echo $value['title'];?>" width="300" height="230"/></a><?php } ?>
</div>
</div>
<div class="post_text">
<div class="inner">
<h2 style="color:#0079FF; font-size:38px; line-height:44px;"><a href="portal.php?mod=view&amp;aid=<?php echo $value['aid'];?>" target="_blank" <?php echo $highlight;?>><?php echo $value['title'];?></a></h2>
<span class="post_infos">In <a href="<?php echo $portalcategory[$value['catid']]['caturl'];?>"><?php echo $value['catname'];?></a> | On <?php echo $value['dateline'];?></span>  
<p><?php echo $value['summary'];?></p>
</div>
</div>
</div>
</article>
<?php } ?>

<div class="pagination"><?php if($list['multi']) { ?><div class="pgs cl"><?php echo $list['multi'];?></div><?php } ?></div>
</div>
</div>
</div>

</div><?php include template('common/footer'); ?>