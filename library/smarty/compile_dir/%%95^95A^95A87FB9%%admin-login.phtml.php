<?php /* Smarty version 2.6.19, created on 2010-05-12 08:06:29
         compiled from admin-login.phtml */ ?>
<html>
    <head>
        <title>明日网上书店管理中心 - 管理员登录</title>
        <meta http-equiv="Content-Type" content="text/html; charset="gbk" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/css/style.css" />
    </head>
    <script src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/js/adminfun.js"></script>
    <body style="background-color:#006D84">

    <div style="width: 684px; height:394px; background:url(<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/login_bg.gif); padding-left:130px;float:right">
    <br /><br /><br /><br /><li style="display:inline"><img src="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/img/login_title.gif" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
<form name="form_login" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-login.php" onsubmit="return chkinputadmin(this)">  
<div style="width:300px; height:200px; text-align:left">
       用户名：<input type="text" name="anc" size="22" class="input" /><br /><br />
       密码：&nbsp;&nbsp;<input type="password" name="pwd" size="22" class="input" /><br /><br />
       验证码：<input type="text" name="xym" size="8" class="input" /><input type="hidden" value="" name="xym1">
<script language="javascript">
					    var num1=Math.round(Math.random()*10000000);
					    var num=num1.toString().substr(0,4);
				        document.write("<img name=codeimg4 src='xym.php?num="+num.substr(0,1)+"'>");
						document.write("<img name=codeimg5 src='xym.php?num="+num.substr(1,1)+"'>");
					    document.write("<img name=codeimg6 src='xym.php?num="+num.substr(2,1)+"'>");
						document.write("<img name=codeimg7 src='xym.php?num="+num.substr(3,1)+"'>");
					    form_login.xym1.value=num;
					  
					  function code_1(){
					    var num1=Math.round(Math.random()*10000000);
					    var num=num1.toString().substr(0,4);
					    document.codeimg4.src="xym.php?num="+num.substr(0,1);
						document.codeimg5.src="xym.php?num="+num.substr(1,1);
						document.codeimg6.src="xym.php?num="+num.substr(2,1);
						document.codeimg7.src="xym.php?num="+num.substr(3,1);
						form_login.xym1.value=num;
					  }
					</script>
<a href="javascript:code_1()" class="a1">看不清</a>


  <br /><br />
   <input type="submit" value="登录" />&nbsp;&nbsp;<input type="reset" value="重置" />
</div> 
</form>
       </div>
    </body>
</html>    