<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<style>
.textwidget, .textwidget a, .ftid a, #um a, #um{ color:#dddddd}
.login_table table tr td{ padding:5px 0px;}
#um{ padding:0px;}
#um p{ text-align:left;}
</style>
<?php if($_G['uid']) { ?>
<div id="um">
<div class="avt" style="float:left"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>"><?php echo avatar($_G[uid],small);?></a></div>
<p style="padding-left:60px;">
<strong class="vwmy<?php if($_G['setting']['connect']['allow'] && $_G['member']['conisbind']) { ?> qq<?php } ?>"><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a></strong> <span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
<br />
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>

<a href="home.php?mod=space&amp;do=pm" id="pm_ntc"<?php if($_G['member']['newpm']) { ?> class="new"<?php } ?>>��Ϣ</a>
<span class="pipe">|</span><a href="home.php?mod=space&amp;do=notice" id="myprompt"<?php if($_G['member']['newprompt']) { ?> class="new"<?php } ?> onmouseover="showMenu({'ctrlid':'myprompt'});">����<?php if($_G['member']['newprompt']) { ?>(<?php echo $_G['member']['newprompt'];?>)<?php } ?></a><span id="myprompt_check"></span>
<?php if(empty($_G['cookie']['ignore_notice']) && ($_G['member']['newpm'] || $_G['member']['newprompt_num']['follower'] || $_G['member']['newprompt_num']['follow'] || $_G['member']['newprompt'])) { ?><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><?php } if($_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])) { ?><span class="pipe">|</span><a href="home.php?mod=task&amp;item=doing" id="task_ntc" class="new">�����е�����</a><?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a>
<?php } ?>
        <br />


</p>

</div>
<div style="margin-top:5px;"><?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<span class="pipe">|</span><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><?php echo $_G['setting']['navs']['2']['navname'];?>����</a>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<span class="pipe">|</span><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank">��ƽ̨</a>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<span class="pipe">|</span><a href="admin.php" target="_blank">��������</a>
            <span class="pipe">|</span><a href="javascript:openDiy();" title="�� DIY ���" onMouseOver="showMenu(this.id)">DIY</a>
<?php } ?>
     
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)">����</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<?php } elseif(!$_G['connectguest']) { ?>

    
    <?php if(CURMODULE != 'logging') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>logging.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="<?php if($_G['setting']['pwdsafety']) { ?>pwmd5('ls_password');<?php } ?>return lsSubmit();">
<div class="cl"> 
<span id="return_ls" style="display:none"></span>
<div class="y pns login_table">
<table cellspacing="0" cellpadding="0">
<tr>
<?php if(!$_G['setting']['autoidselect']) { ?>
<td>
�û���&nbsp;&nbsp; 
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" style="width:120px;"/></td>
<?php } else { ?>
<td><label for="ls_username"><font style="color:#dddddd">!account!</font></label></td>
<td><input type="text" name="username" id="ls_username" class="px vm xg1" <?php if($_G['setting']['autoidselect']) { ?> value="<?php if(getglobal('setting/uidlogin')) { ?>UID/<?php } ?>�û���/Email" onfocus="if(this.value == '<?php if(getglobal('setting/uidlogin')) { ?>UID/<?php } ?>�û���/Email'){this.value = '';this.className = 'px vm';}" onblur="if(this.value == ''){this.value = '<?php if(getglobal('setting/uidlogin')) { ?>UID/<?php } ?>�û���/Email';this.className = 'px vm xg1';}"<?php } ?> tabindex="901" /></td>
<?php } ?>	

</tr>
<tr>
<td>���룺&nbsp;&nbsp;</td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" style="width:120px;" /></td>				
</tr>               
</table>
            <div style="margin:8px 0px;">
             <button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>��¼</em></button>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />�Զ���¼
                
                </div>
                 <div>
               <a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">�һ�����</a>
                 &nbsp;&nbsp;<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
                </div>
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_login_extra'])) echo $_G['setting']['pluginhooks']['global_login_extra'];?>
</div>
</form>

<?php if($_G['setting']['pwdsafety']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>md5.js?<?php echo VERHASH;?>" type="text/javascript" reload="1"></script>
<?php } } ?>
    
    
<?php } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a>
<span class="pipe">|</span>�û���: <?php echo $_G['group']['grouptitle'];?>
</p>
</div>
<?php } ?>