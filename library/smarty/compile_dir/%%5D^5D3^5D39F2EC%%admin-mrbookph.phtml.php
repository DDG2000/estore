<?php /* Smarty version 2.6.19, created on 2009-06-09 08:49:40
         compiled from admin-mrbookph.phtml */ ?>
    <div style="width:98%; height:25px; text-align:left"><input type="button" value="添加明日图书排行信息"  onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-mrbookph.php'" />&nbsp;&nbsp;<input type="button" value="浏览明日图书排行信息" onclick="window.location.href='<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-listmrbookph.php'"/></div>    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-left:5px; padding-top:5px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>添加明日图书排行信息</strong></li>
        </div>
        
        <div style="width:100%; text-align:left; padding-top:20px; padding:5px">
         
          <form name="form_addcxsx" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-mrbookph.php" onsubmit="return chkInputCommon(this)">
            <div style="width:100%; text-align:left; padding-top:5px">
                  主题：<input type="text" name="title" size="80" class="input" <?php if ($this->_tpl_vars['isEdit'] == 'T'): ?>value="<?php echo $this->_tpl_vars['info'][0]['title']; ?>
"<?php endif; ?>/><br /><br /> 
                内容： <?php if ($this->_tpl_vars['isEdit'] == 'F'): ?>
                  <?php echo $this->_reg_objects['util'][0]->editor('content','');?>
<br /><br /> 
                <?php else: ?>
                   <?php echo $this->_reg_objects['util'][0]->editor('content',$this->_tpl_vars['info'][0]['content']);?>
<br /><br /> 
                   <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['info'][0]['id']; ?>
" /> 
                <?php endif; ?>
                
                  
                <input type="submit" value="<?php if ($this->_tpl_vars['isEdit'] == 'F'): ?>添加<?php else: ?>更改<?php endif; ?>" />&nbsp;&nbsp;<input type="reset" value="重置" />
            </div> 
            </form>  
        
    
        </div>    
    </div>