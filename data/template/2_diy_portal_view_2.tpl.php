<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('view_2');?><?php include template('common/header'); ?></div>
<div class="content_inner  " style="position: relative; visibility: visible; display: block;">


<div class="title2">
<div class="title_holder" style="opacity: 1;">
<div class="container">
<div class="container_inner clearfix">
<h1 ><?php echo $cat['catname'];?></h1>
<span class="subtitle"><?php if(is_array($cat['ups'])) foreach($cat['ups'] as $value) { ?><a href="<?php echo getportalcategoryurl($value['catid']); ?>"><?php echo $value['catname'];?></a> / 
<?php } ?>
<a href="<?php echo getportalcategoryurl($cat['catid']); ?>"><?php echo $cat['catname'];?></a> / 
查看内容</div>
</div>
</div>
</div>


<div class="container">
<div class="container_inner clearfix" style="padding-top:30px;">
        <div class="blog_holder v2 blog_single">
<article class="gallery">

<div class="post_content_holder" style="width:100%">

<div class="post_text">
<div class="inner">
<h2 style="text-align:center; color:#0079FF; font-size:38px; font-weight:normal; line-height:48px;"><?php echo $article['title'];?> <?php if($article['status'] == 1) { ?>(待审核)<?php } elseif($article['status'] == 2) { ?>(已忽略)<?php } ?></h2>
<span class="post_infos" style="text-align:center"><?php echo $article['dateline'];?>&nbsp;&nbsp;查看: <em id="_viewnum"><?php if($article['viewnum'] > 0) { ?><?php echo $article['viewnum'];?><?php } else { ?>0<?php } ?></em> 
<?php if($_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']) { ?>
 <a href="portal.php?mod=portalcp&amp;ac=article&amp;op=edit&amp;aid=<?php echo $article['aid'];?>">编辑</a>
<?php if($article['status']>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])) { ?>
 <a href="portal.php?mod=portalcp&amp;ac=article&amp;op=verify&amp;aid=<?php echo $article['aid'];?>" id="article_verify_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">审核</a>
<?php } else { ?>
<a href="portal.php?mod=portalcp&amp;ac=article&amp;op=delete&amp;aid=<?php echo $article['aid'];?>" id="article_delete_<?php echo $article['aid'];?>" onclick="showWindow(this.id, this.href, 'get', 0);">删除</a>
<?php } } ?></span>

<?php echo $content['content'];?>			
</div>
</div>
                <?php if($multi) { ?><div class="ptw pbw cl" ><?php echo $multi;?></div><?php } ?>

</article>
            </div>
</div>

</div><?php include template('common/footer'); ?>