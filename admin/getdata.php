<?php

include("control.php");

	if(isset($_REQUEST['country']))
	{		
		$c = $_REQUEST['country'];
		$obj=new control();
		$se = $obj->selgcou($c);
	?>
	<option value="select">Select</option>
	<?php
		while($r=mysql_fetch_array($se))
		{
	?>
	<option value="<?php echo $r['sid']; ?>"><?php echo $r['sname']; ?></option>
	<?php
			}
		}
?>



<?php

	if(isset($_REQUEST['state']))
	{
		$ct = $_REQUEST['state'];
		$obj=new control();
		$sec = $obj->selgst($ct);		
	?>
	<option value="select">Select</option>
	<?php
		while($rw=mysql_fetch_array($sec))
		{
	?>
	<option value="<?php echo $rw['ctid']; ?>"><?php echo $rw['ctname']; ?></option>
	<?php
			}
		}

?>