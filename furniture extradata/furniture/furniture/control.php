<?php

include("model.php");

class control
{
	//insert feedback
	function ins($fn,$em,$mb,$pr,$ad,$ms)
	{
		$obj=new model();
		$in = $obj->inse($fn,$em,$mb,$pr,$ad,$ms);
	}
	//select branch details
	function selb()
	{
		$obj=new model();
		$selb = $obj->selbran();
		return $selb;
	}
	//fetch country in signup
	function selco()
	{
		$obj=new model();
		$selc = $obj->selcou();
		return $selc;
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
	//insert user signup
	function inu($un,$ps,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci)
	{
		$obj=new model();
		$in = $obj->insu($un,$ps,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci);
	}
	//select user signup
	function seleu()
	{
		$obj=new model();
		$sels = $obj->selsign();
		return $sels;
	}
	//sign in user details
	function selus($un,$ps)
	{
		$obj=new model();
		$selu = $obj->seluse($un,$ps);
		return $selu;
	}
	//fetch forgot in signup
	function selef($em,$se,$ans)
	{
		$obj=new model();
		$selefo = $obj->selecfor($em,$se,$ans);
		return $selefo;
	}
	//update password in signup
	function upda($ps1,$id)
	{
		$obj=new model();
		$updat = $obj->update($ps1,$id);
	}
	//fetch profile details
	function fpro($id)
	{
		$obj=new model();
		$selep = $obj->fetprof($id);
		return $selep;
	}
	//fetch profile details in profileedit for update
	function spr($e)
	{
		$obj=new model();
		$selp = $obj->sprof($e);
		return $selp;
	}
	//fetch state in profileedit
	function sel_st()
	{
		$obj=new model();
		$selst = $obj->s_state();
		return $selst;
	}
	//fetch city in profileedit
	function sel_ct()
	{
		$obj=new model();
		$selct = $obj->s_city();
		return $selct;
	}
	//select sec que for proedit
	function selsec($e)
	{
		$obj=new model();
		$selqu = $obj->ssecque($e);
		return $selqu;
	}
	//update profile in editpro
	function uprof($e,$un,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci)
	{
		$obj=new model();
		$upro = $obj->updtpro($e,$un,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci);
	}
	//fetch category in order
	function selca()
	{
		$obj=new model();
		$selc = $obj->selcat();
		return $selc;
	}
	//fetch sub category in getdata1
	function selsub($c)
	{
		$obj=new model();
		$selsu = $obj->selsubc($c);
		return $selsu;
	}
	//fetch product in getdata1
	function selpr($ct)
	{
		$obj=new model();
		$selpro = $obj->selprodu($ct);
		return $selpro;
	}
	//insert order in userorder
	function inor($cn,$em,$mo,$ca,$su,$pr,$qu,$ad,$co,$st,$ci,$ms,$da)
	{
		$obj=new model();
		$inso = $obj->inord($cn,$em,$mo,$ca,$su,$pr,$qu,$ad,$co,$st,$ci,$ms,$da);
	}
	//view order as per user
	function ford($em)
	{
		$obj=new model();
		$selo = $obj->fordu($em);
		return $selo;
	}
	//view csr certi
	function vcsr()
	{
		$obj=new model();
		$selc = $obj->selcsr();
		return $selc;
	}
}

?>