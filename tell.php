<?php 
require_once 'header.php';
//

if(!isset($_GET['page']) || $_GET['page']=='')
{
	$page='1';
}
else 
{
	$page = $_GET['page'];
}
//
if(!isset($_GET['cctype']) || $_GET['cctype']=='')
{
	$cctype='1';
}
else 
{
	$cctype = $_GET['cctype'];
}
$smarty->assign('cctype', $cctype);

//
$bigtypes = $adminDB->executeSQL("select id, typename from tb_bigtype order by addtime", $connID);
$smarty->assign('bigtypes', $bigtypes);

$smalltypes = $adminDB->executeSQL("select id, typename, bigtypeid from tb_smalltype order by addtime", $connID);
$smarty->assign('smalltypes', $smalltypes);

//

$tells = $pageDB->pageData("select id, title, addtime from tb_tell order by addtime desc", $connID, 20, $page);
$smarty->assign('tells', $tells);



$smarty->display('tell.phtml');
require_once 'footer.php';