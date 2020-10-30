<?php

include("control.php");

	if(isset($_REQUEST['category']))
	{		
		$c = $_REQUEST['category'];
		$obj=new control();
		$se = $obj->selsubb($c);
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

