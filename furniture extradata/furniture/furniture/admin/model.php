<?php

class model
{
	//database
	function model()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("furniture");
	}
	//registration admin
	function insertadmin($un,$ps,$em)
	{
		$insert = "insert into admin_reg(username,password,email) values('$un','$ps','$em')";
		$ex = mysql_query($insert);
	}
	//fetch admin login
	function seladmin($un,$ps)
	{
		$seladm = "select * from admin_reg WHERE username='$un' && password='$ps'";
		$ex = mysql_query($seladm);
		return $ex;
	}
	//fetch country in managebranch
	function selcou()
	{
		$selco = "select * from country";
		$exco = mysql_query($selco);
		return $exco;
	}
	//fetch state in managebranch
	function selstate()
	{
		$selstat = "select * from state";
		$exst = mysql_query($selstat);
		return $exst;
	}
	//fetch city in managebranch
	function selcity()
	{
		$selcit = "select * from city";
		$exct = mysql_query($selcit);
		return $exct;
	}
	//fetch state in getdata
	function selgcoun($c)
	{
		$selgc = "select * from state where cid='$c'";
		$exst = mysql_query($selgc);
		return $exst;
	}
	//fetch city in getdata
	function selgsta($ct)
	{
		$selgcity = "select * from city where sid='$ct'";
		$exct = mysql_query($selgcity);
		return $exct;
	}
	//insert branch details
	function insbr($bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf)
	{
		$insebr = "insert into branch_detail(br_name,br_address,country,state,city,br_incharge,br_mobile,br_phone,br_email,br_fax) values('$bn','$ba','$co','$st','$ci','$bi','$bm','$bp','$be','$bf')";
		$exbr = mysql_query($insebr);
	}
	//view branch details
	function selbranch()
	{
		$sebran = "select branch_detail.*,country.cname,state.sname,city.ctname from branch_detail join country on branch_detail.country=country.cid join state on branch_detail.state=state.sid join city on branch_detail.city=city.ctid";
		$exbran = mysql_query($sebran);
		return $exbran;
	}
	//delete branch details
	function delbranch($d)
	{
		$debranch = "delete from branch_detail where br_id='$d'";
		$exdbr = mysql_query($debranch);
	}
	//fetch branch details
	function selbnra($e)
	{
		$selnbr = "select * from branch_detail where br_id='$e'";
		$exbr = mysql_query($selnbr);
		return $exbr;
	}
	//update branch details
	function updatebr($e,$bn,$ba,$co,$st,$ci,$bi,$bm,$bp,$be,$bf)
	{
		$upbranc = "update branch_detail set br_name='$bn',br_address='$ba',country='$co',state='$st',city='$ci',br_incharge='$bi',br_mobile='$bm',br_phone='$bp',br_email='$be',br_fax='$bf' where br_id='$e'";
		$exbru = mysql_query($upbranc);
	}
	//insert dealer details
	function insdr($dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df)
	{
		$insedr = "insert into dealer_detail(de_name,de_address,country,state,city,de_incharge,de_mobile,de_phone,de_email,de_fax) values('$dn','$da','$co','$st','$ci','$di','$dm','$dp','$de','$df')";
		$exdr = mysql_query($insedr);
	}
	//view dealer details
	function seldealer()
	{
		$sedeal = "select dealer_detail.*,country.cname,state.sname,city.ctname from dealer_detail join country on dealer_detail.country=country.cid join state on dealer_detail.state=state.sid join city on dealer_detail.city=city.ctid";
		$exdelr = mysql_query($sedeal);
		return $exdelr;
	}
	//fetch dealer details
	function seldealerr($e)
	{
		$selde = "select * from dealer_detail where de_id='$e'";
		$exdr = mysql_query($selde);
		return $exdr;
	}
	//update branch details
	function updade($e,$dn,$da,$co,$st,$ci,$di,$dm,$dp,$de,$df)
	{
		$updealer = "update dealer_detail set de_name='$dn',de_address='$da',country='$co',state='$st',city='$ci',de_incharge='$di',de_mobile='$dm',de_phone='$dp',de_email='$de',de_fax='$df' where de_id='$e'";
		$exdeal = mysql_query($updealer);
	}
	//delete dealer details
	function delde($d)
	{
		$dedealer = "delete from dealer_detail where de_id='$d'";
		$exdea = mysql_query($dedealer);
	}
	//insert category details
	function incate($cn)
	{
		$incat = "insert into category(cat_name) values('$cn')";
		$exca = mysql_query($incat);
	}
	//view category details
	function selcate()
	{
		$cat = "select * from category";
		$exca = mysql_query($cat);
		return $exca;
	}
	//delete category details
	function decate($d)
	{
		$decag = "delete from category where cat_id='$d'";
		$exde = mysql_query($decag);
	}
	//fetch category details
	function selcateg($e)
	{
		$catg = "select * from category where cat_id='$e'";
		$excg = mysql_query($catg);
		return $excg;
	}
	//update category details
	function upcatg($e,$cn)
	{
		$ucatgt = "update category set cat_name='$cn' where cat_id='$e'";
		$exc = mysql_query($ucatgt);
	}
	//insert sub category details
	function insubc($ca,$su)
	{
		$inscat = "insert into subcat(cat_id,sub_name) values('$ca','$su')";
		$exc = mysql_query($inscat);
	}
	//select category in msubcat
	function selscg()
	{
		$cats = "select * from category";
		$excs = mysql_query($cats);
		return $excs;
	}
	//fetch sub category details
	function selscbc($e)
	{
		$catb = "select * from subcat where sub_id='$e'";
		$excb = mysql_query($catb);
		return $excb;
	}
	//update sub category details
	function upcbc($e,$ca,$su)
	{
		$upsub = "update subcat set cat_id='$ca',sub_name='$su' where sub_id='$e'";
		$exb = mysql_query($upsub);
	}
	//view sub category details
	function ssubcat()
	{
		$sub = "select subcat.*,category.cat_name from subcat join category on subcat.cat_id=category.cat_id";
		$excb = mysql_query($sub);
		return $excb;		
	}
	//delete sub category details
	function desubce($d)
	{
		$desub = "delete from subcat where sub_id='$d'";
		$exd = mysql_query($desub);
	}
	//select category in mproduct
	function semcattc()
	{
		$catc = "select * from category";
		$excc = mysql_query($catc);
		return $excc;
	}
	//when edit sub category in mproduct
	function sesubtc()
	{
		$catb = "select * from subcat";
		$excb = mysql_query($catb);
		return $excb;
	}
	//select subcat ajax in getdata1
	function sesubcat($c)
	{
		$catsub = "select * from subcat where cat_id='$c'";
		$excs = mysql_query($catsub);
		return $excs;
	}
	//insert product details
	function inprd($ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq)
	{
		$inspr = "insert into product(cat_id,sub_id,pro_name,pro_price,model_no,pro_code,pro_img,pro_desc,pro_color,pro_war,pro_quan) values('$ca','$su','$pn','$pp','$mn','$pc','$pi','$pd','$pcol','$pw','$pq')";
		$exp = mysql_query($inspr);
	}
	//view product details
	function sprodu()
	{
		$sprod = "select product.*,subcat.sub_name from product join subcat on product.sub_id=subcat.sub_id";
		$expr = mysql_query($sprod);
		return $expr;
	}
	//delete product details
	function depro($d)
	{
		$depo = "delete from product where pro_id='$d'";
		$exp = mysql_query($depo);
	}
	//fetch product details
	function sprduc($e)
	{
		$spd = "select * from product where pro_id='$e'";
		$expd = mysql_query($spd);
		return $expd;
	}
	//update product details
	function updprod($e,$ca,$su,$pn,$pp,$mn,$pc,$pi,$pd,$pcol,$pw,$pq)
	{
		echo $uppro = "update product set cat_id='$ca', sub_id='$su',pro_name='$pn',pro_price='$pp',model_no='$mn',pro_code='$pc',pro_img='$pi',pro_desc='$pd',pro_color='$pcol',pro_war='$pw',pro_quan='$pq' where pro_id='$e'";
		$expro = mysql_query($uppro);
	}
	//view user details
	function spusrer()
	{
		$spr = "select user_reg.*,country.cname,state.sname,city.ctname from user_reg join country on user_reg.country=country.cid join state on user_reg.state=state.sid join city on user_reg.city=city.ctid";
		$expr = mysql_query($spr);
		return $expr;
	}
	//delete user details
	function deusrr($d)
	{
		$deur = "delete from user_reg where user_id='$d'";
		$exu = mysql_query($deur);
	}
	//select status as per user id
	function stsign($st_id)
	{
		$sel_st = "select * from user_reg where user_id='$st_id'";
		$ex_st = mysql_query($sel_st);
		return $ex_st;
	}
	//status user details
	function statu($st_id)
	{
		$up = "update user_reg set status='Disabled' where user_id='$st_id'";
		$ext = mysql_query($up);
	}
	//status user details
	function stauu($st_id)
	{
		$upt = "update user_reg set status='Enabled' where user_id='$st_id'";
		$exu = mysql_query($upt);
	}
	//view feedback details
	function sefdb()
	{
		$self = "select * from user_feedback";
		$exf = mysql_query($self);
		return $exf;
	}
	//delete feedback details
	function defeed($d)
	{		
		$defff = "delete from user_feedback where feed_id='$d'";
		$exf = mysql_query($defff);
	}
	//view order details
	function selorder()
	{
		$selo = "select user_order.*,category.cat_name,subcat.sub_name,product.pro_name,country.cname,state.sname,city.ctname from user_order join category on user_order.category=category.cat_id join subcat on user_order.subcat=subcat.sub_id join product on user_order.product=product.pro_id join country on user_order.country=country.cid join state on user_order.state=state.sid join city on user_order.city=city.ctid";
		$exo = mysql_query($selo);
		return $exo;
	}
	//delete order details
	function deorder($d)
	{		
		$deo = "delete from user_order where order_id='$d'";
		$exor = mysql_query($deo);
	}
	//insert csr details
	function inscsr($cs)
	{
		$incs = "insert into csr(photo) values('$cs')";
		$exc = mysql_query($incs);
	}
	//delete csr details
	function dddcsr($d)
	{
		$decs = "delete from csr where csrid='$d'";
		$exd = mysql_query($decs);
	}
	//fetch csr details
	function selcsr($e)
	{
		$selc = "select * from csr";
		$exr = mysql_query($selc);
		return $exr;
	}
	//update csr details
	function updcsr($e,$cs)
	{
		$upcsr = "update csr set photo='$cs' where csrid='$e'";
		$exu = mysql_query($upcsr);
	}
}

?>