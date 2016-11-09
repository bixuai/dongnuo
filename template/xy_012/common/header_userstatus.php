<?php echo '加田小店';exit;?>
<style>
.textwidget, .textwidget a, .ftid a, #um a, #um{ color:#dddddd}
.login_table table tr td{ padding:5px 0px;}
#um{ padding:0px;}
#um p{ text-align:left;}
</style>
<!--{if $_G['uid']}-->
<div id="um">
	<div class="avt" style="float:left"><a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></div>
	<p style="padding-left:60px;">
		<strong class="vwmy{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}"><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a></strong> <span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
		<br />
		<!--{hook/global_usernav_extra1}-->
		
		<a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>
		<span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new"{/if} onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
		<!--{if empty($_G['cookie']['ignore_notice']) && ($_G[member][newpm] || $_G[member][newprompt_num][follower] || $_G[member][newprompt_num][follow] || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}-->
		<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
		
		<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
        <br />
		
		
	</p>
	
</div>
<div style="margin-top:5px;"><!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
			<a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
		<!--{/if}-->
		<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->
			<span class="pipe">|</span><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->
			<span class="pipe">|</span><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a>
		<!--{/if}-->
		<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
			<span class="pipe">|</span><a href="admin.php" target="_blank">{lang admincp}</a>
            <span class="pipe">|</span><a href="javascript:openDiy();" title="{lang open_diy}" onMouseOver="showMenu(this.id)">DIY</a>
		<!--{/if}-->
     
</div>
<!--{elseif !empty($_G['cookie']['loginuser'])}-->
<p>
	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
</p>
<!--{elseif !$_G[connectguest]}-->
	
    
    <!--{if CURMODULE != 'logging'}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
	<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
	<div class="cl"> 
		<span id="return_ls" style="display:none"></span>
		<div class="y pns login_table">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<!--{if !$_G['setting']['autoidselect']}-->
						<td>
						用户：&nbsp;&nbsp; 
						</td>
						<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" style="width:120px;"/></td>
					<!--{else}-->
						<td><label for="ls_username"><font style="color:#dddddd">{lang account}</font></label></td>
						<td><input type="text" name="username" id="ls_username" class="px vm xg1" {if $_G['setting']['autoidselect']} value="{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email" onfocus="if(this.value == '{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email'){this.value = '';this.className = 'px vm';}" onblur="if(this.value == ''){this.value = '{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email';this.className = 'px vm xg1';}"{/if} tabindex="901" /></td>
					<!--{/if}-->	
					
				</tr>
				<tr>
					<td>密码：&nbsp;&nbsp;</td>
					<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" style="width:120px;" /></td>				
				</tr>               
			</table>
            <div style="margin:8px 0px;">
             <button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>{lang login}</em></button>&nbsp;&nbsp;&nbsp;<input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />{lang login_permanent}
                
                </div>
                 <div>
               <a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">{lang forgotpw}</a>
                 &nbsp;&nbsp;<a href="member.php?mod={$_G[setting][regname]}" class="xi2 xw1">$_G['setting']['reglinkname']</a>
                </div>
			<input type="hidden" name="quickforward" value="yes" />
			<input type="hidden" name="handlekey" value="ls" />
		</div>
		<!--{hook/global_login_extra}-->
	</div>
	</form>

	<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->

<!--{/if}-->
    
    
<!--{else}-->
<div id="um">
	<div class="avt y"><!--{avatar(0,small)}--></div>
	<p>
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
	</p>
	<p>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
	</p>
</div>
<!--{/if}-->