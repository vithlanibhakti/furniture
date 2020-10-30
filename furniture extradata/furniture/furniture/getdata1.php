<?php

include("control.php");

	if(isset($_REQUEST['category']))
	{		
		$c = $_REQUEST['category'];
		$obj=new control();
		$se = $obj->selsub($c);
	?>
	<option value="select">Select</option>
	<?php
		while($r=mysql_fetch_array($se))
		{
	?>
	<option value="<?php echo $r['sub_id']; ?>"><?php echo $r['sub_name']; ?></option>
	<?php
			}
		}
?>



<?php

	if(isset($_REQUEST['subcat']))
	{
		$ct = $_REQUEST['subcat'];
		$obj=new control();
		$sec = $obj->selpr($ct);		
	?>
	<option value="select">Select</option>
	<?php
		while($rw=mysql_fetch_array($sec))
		{
	?>
	<option value="<?php echo $rw['pro_id']; ?>"><?php echo $rw['pro_name']; ?></option>
	<?php
			}
		}

?>