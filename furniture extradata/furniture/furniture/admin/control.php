<?php

include("model.php");

class control
{
	//registration admin
	function insertad($un,$ps,$em)
	{
		$obj=new model();
		$ins = $obj->insertadmin($un,$ps,$em);
	}
	//fetch admin login
	function selad($un,$ps)
	{
		$obj=new model();
		$sela = $obj->seladmin($un,$ps);
		return $sela;
	}
	//fetch country in managebranch
	function selco()
	{
		$obj=new model();
		$selc = $obj->selcou();
		return $selc;
	}
	//fetch state in managebranch
	function selst()
	{	
		$obj=new model();
		$selsta = $obj->selstate();
		return $selsta;
	}
	//fetch city in managebranch
	function selct()
	{
		$obj=new model();
		$selci = $obj->selcity();
		return $selci;
	}
	//fetch state in getdata
	function selgcou($c)
	{
		$obj=new model();
		$selsta = $obj->selgcoun($c);
		return $selsta;
	}
	//fetch city in getdata
	function selgst($ct)
	{
		$obj=new model();
		$selcta = $obj->selgsta($ct);
		return $selcta;
	}
	//insert branch details
	function insb($bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf)
	{
		$obj=new model();
		$ins = $obj->insbr($bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf);
	}
	//view branch details
	function selbr()
	{
		$obj=new model();
		$selbran = $obj->selbranch();
		return $selbran;
	}
	//delete branch details
	function delbr($d)
	{
		$obj=new model();
		$delbran = $obj->delbranch($d);
	}
	//fetch branch details
	function selbnc($e)
	{
		$obj=new model();
		$sbr = $obj->selbnra($e);
		return $sbr;
	}
	//update branch details
	function updbr($e,$bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf)
	{
		$obj=new model();
		$upbrn = $obj->updatebr($e,$bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf);
	}
	//insert dealer details
	function insd($dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df)
	{
		$obj=new model();
		$ins = $obj->insdr($dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df);
	}
	//view dealer details
	function seldr()
	{
		$obj=new model();
		$selde = $obj->seldealer();
		return $selde;
	}
	//fetch dealer details
	function seldea($e)
	{
		$obj=new model();
		$sdeale = $obj->seldealerr($e);
		return $sdeale;
	}
	//update branch details
	function upde($e,$dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df)
	{
		$obj=new model();
		$updea = $obj->updade($e,$dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df);
	}
	//delete dealer details
	function deldr($d)
	{
		$obj=new model();
		$delde = $obj->delde($d);
	}
	//insert category details
	function insca($cn)
	{		
		$obj=new model();
		$inca = $obj->incate($cn);
	}
	//view category details
	function secate()
	{
		$obj=new model();
		$sec = $obj->selcate();
		return $sec;
	}
	//delete category details
	function delca($d)
	{
		$obj=new model();
		$dcat = $obj->decate($d);
	}
	//fetch category details
	function selctg($e)
	{
		$obj=new model();
		$sect = $obj->selcateg($e);
		return $sect;
	}
	//update category details
	function upca($e,$cn)
	{
		$obj=new model();
		$upct = $obj->upcatg($e,$cn);
	}
	//insert sub category details
	function insuc($ca,$su)
	{
		$obj=new model();
		$isu = $obj->insubc($ca,$su);
	}
	//select category in msubcat
	function selcsu()
	{
		$obj=new model();
		$secg = $obj->selscg();
		return $secg;
	}
	//fetch sub category details
	function selsbc($e)
	{
		$obj=new model();
		$secb = $obj->selscbc($e);
		return $secb;
	}
	//update sub category details
	function upsbca($e,$ca,$su)
	{
		$obj=new model();
		$upbb = $obj->upcbc($e,$ca,$su);
	}
	//view sub category details
	function subcat()
	{
		$obj=new model();
		$secb = $obj->ssubcat();
		return $secb;
	}
	//delete sub category details
	function desub($d)
	{
		$obj=new model();
		$dscat = $obj->desubce($d);
	}
	//select sub category in mproduct
	function semcat()
	{
		$obj=new model();
		$sect = $obj->semcattc();
		return $sect;
	}
	//when edit sub category in mproduct
	function sesucat()
	{
		$obj=new model();
		$secv = $obj->sesubtc();
		return $secv;
	}
	//select subcat ajax in getdata1
	function selsubb($c)
	{
		$obj=new model();
		$sey = $obj->sesubcat($c);
		return $sey;
	}
	//insert product details
	function inpr($ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq)
	{
		$obj=new model();
		$ipr = $obj->inprd($ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq);
	}
	//view product details
	function sprd()
	{	
		$obj=new model();
		$sep = $obj->sprodu();
		return $sep;
	}
	//delete product details
	function dpr($d)
	{
		$obj=new model();
		$de = $obj->depro($d);
	}
	//fetch product details
	function sepro($e)
	{
		$obj=new model();
		$sepr = $obj->sprduc($e);
		return $sepr;
	}
	//update product details
	function uppr($e,$ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq)
	{
		$obj=new model();
		$upro = $obj->updprod($e,$ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq);
	}
	//view user details
	function selusr()
	{
		$obj=new model();
		$seusr = $obj->spusrer();
		return $seusr;
	}
	//delete user details
	function delur($d)
	{
		$obj=new model();
		$del = $obj->deusrr($d);
	}
	//select status as per user id
	function stsig($st_id)
	{
		$obj=new model();
		$sesi = $obj->stsign($st_id);
		return $sesi;
	}
	//status user details
	function sta($st_id)
	{
		$obj=new model();
		$stt = $obj->statu($st_id);
	}
	//status update user details
	function stu($st_id)
	{
		$obj=new model();
		$stuu = $obj->stauu($st_id);
	}
	//view feedback details
	function sefeed()
	{
		$obj=new model();
		$seff = $obj->sefdb();
		return $seff;
	}
	//delete feedback details
	function delf($d)
	{
		$obj=new model();
		$dfe = $obj->defeed($d);
	}
	//view order details
	function selord()
	{
		$obj=new model();
		$seo = $obj->selorder();
		return $seo;
	}
	//delete order details
	function delor($d)
	{
		$obj=new model();
		$dfe = $obj->deorder($d);
	}
	//insert csr details
	function incsr($cs)
	{
		$obj=new model();
		$csrr = $obj->inscsr($cs);
	}
	//delete csr details
	function decsr($d)
	{
		$obj=new model();
		$csrd = $obj->dddcsr($d);
	}
	//fetch csr details
	function csre($e)
	{
		$obj=new model();
		$secsr = $obj->selcsr($e);
		return $secsr;
	}
	//update csr details
	function upcsr($e,$cs)
	{
		$obj=new model();
		$csre = $obj->updcsr($e,$cs);
	}
}

?>