<?php

class model
{
	//database
	function model()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("furniture");
	}
	//insert feedback
	function inse($fn,$em,$mb,$pr,$ad,$ms)
	{
		$insert = "insert into user_feedback(fullname,email,mobile_no,product_name,address,message) values('$fn','$em','$mb','$pr','$ad','$ms')";
		$ex = mysql_query($insert);
	}
	//select branch details
	function selbran()
	{
		$selbranc = "select branch_detail.*,country.cname,state.sname,city.ctname from branch_detail join country on branch_detail.country=country.cid join state on branch_detail.state=state.sid join city on branch_detail.city=city.ctid";
		$exbr = mysql_query($selbranc);
		return $exbr;
	}
	//fetch country in signup
	function selcou()
	{
		$selco = "select * from country";
		$exco = mysql_query($selco);
		return $exco;
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
	//insert user signup
	function insu($un,$ps,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci)
	{
		$insertu = "insert into user_reg(username,password,f_name,l_name,email,sec,ans,gender,hobby,mobile_no,address,country,state,city) values('$un','$ps','$fn','$ln','$em','$se','$an','$gn','$ho','$mo','$ad','$co','$st','$ci')";
		$exu = mysql_query($insertu);
	}
	//select user signup
	function selsign()
	{
		$selsi = "select user_reg.*,country.cname,state.sname,city.ctname from user_reg join country on user_reg.country=country.cid join state on user_reg.state=state.sid join city on user_reg.city=city.ctid";
		$exs = mysql_query($selsi);
		return $exs;
	}
	//sign in user details
	function seluse($un,$ps)
	{
		$seluser = "select * from user_reg where username='$un' && password='$ps'";
		$exusr = mysql_query($seluser);
		return $exusr;
	}
	//fetch forgot in signup
	function selecfor($em,$se,$ans)
	{
		$sefor = "select * from user_reg where email='$em' && ans='$ans' && sec='$se'";
		$ex = mysql_query($sefor);
		return $ex;
	}
	//update password in signup
	function update($ps1,$id)
	{
		$updatp = "update user_reg set password='$ps1' where user_id='$id'";
		$ex = mysql_query($updatp);
	}
	//fetch profile details
	function fetprof($id)
	{
		$selp = "select user_reg.*,country.cname,state.sname,city.ctname from user_reg join country on user_reg.country=country.cid join state on user_reg.state=state.sid join city on user_reg.city=city.ctid where user_id='$id'";
		$exp = mysql_query($selp);
		return $exp;
	}
	//fetch profile details in profileedit for update
	function sprof($e)
	{
		$self = "select user_reg.*,country.cname,state.sname,city.ctname from user_reg join country on user_reg.country=country.cid join state on user_reg.state=state.sid join city on user_reg.city=city.ctid where user_id='$e'";
		$ef = mysql_query($self);
		return $ef;
	}
	//fetch state in profileedit
	function s_state()
	{
		$selst = "select * from state";
		$est = mysql_query($selst);
		return $est;
	}
	//fetch city in profileedit
	function s_city()
	{
		$selct = "select * from city";
		$ect = mysql_query($selct);
		return $ect;
	}
	//select sec que for proedit
	function ssecque($e)
	{
		$selct = "select sec from user_reg where user_id='$e'";
		$ect = mysql_query($selct);
		return $ect;
	}
	//update profile in editpro
	function updtpro($e,$un,$fn,$ln,$em,$se,$an,$gn,$ho,$mo,$ad,$co,$st,$ci)
	{
		$updatpr = "update user_reg set username='$un', f_name='$fn', l_name='$ln', email='$em', sec='$se', ans='$an', gender='$gn', hobby='$ho', mobile_no='$mo', address='$ad', country='$co', state='$st', city='$ci' where user_id='$e'";
		$ex = mysql_query($updatpr);
	}
	//fetch category in order
	function selcat()
	{
		$selcat = "select * from category";
		$exca = mysql_query($selcat);
		return $exca;
	}	
	//fetch sub category in getdata1
	function selsubc($c)
	{
		$selgc = "select * from subcat where cat_id='$c'";
		$exst = mysql_query($selgc);
		return $exst;
	}
	//fetch product in getdata1
	function selprodu($ct)
	{
		$selpro = "select * from product where sub_id='$ct'";
		$expr = mysql_query($selpro);
		return $expr;
	}
	//insert order in userorder
	function inord($cn,$em,$mo,$ca,$su,$pr,$qu,$ad,$co,$st,$ci,$ms,$da)
	{
		$iord = "insert into user_order(cust_name,email,mobile,category,subcat,product,quantity,address,country,state,city,message,order_date) values('$cn','$em','$mo','$ca','$su','$pr','$qu','$ad','$co','$st','$ci','$ms','$da')";
		$exor = mysql_query($iord);
	}
	//view order as per user
	function fordu($em)
	{
		$selor = "select user_order.*,category.cat_name,subcat.sub_name,product.pro_name,country.cname,state.sname,city.ctname from user_order join category on user_order.category=category.cat_id join subcat on user_order.subcat=subcat.sub_id join product on user_order.product=product.pro_id join country on user_order.country=country.cid join state on user_order.state=state.sid join city on user_order.city=city.ctid where email='$em'";
		$exr = mysql_query($selor);
		return $exr;
	}
	//view csr certi
	function selcsr()
	{
		$selr = "select * from csr";
		$expc = mysql_query($selr);
		return $expc;
	}
}
?>