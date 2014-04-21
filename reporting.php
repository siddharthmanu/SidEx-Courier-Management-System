<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
</head>

<body>
<?php
        
			$con=mysql_connect("localhost","root","");
			if(!$con)
			{
			die('could not connect'.mysql_error());
			}
			
			mysql_select_db("courier",$con);
			
			
			$sql1="select * from courier_table where `status`='Loaded'";
			$sql2="select * from courier_table where `status`='In Transit'";
			$sql3="select * from courier_table where `status`='Delivered'";
			$sql4="select * from courier_table";
			
			
			$result1=mysql_query($sql1,$con);
			$result2=mysql_query($sql2,$con);
			$result3=mysql_query($sql3,$con);
			$result4=mysql_query($sql4,$con);
			include("report1.php");
			if(!$result1)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'Loaded' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysql_fetch_row($result1))
			{
				
				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";
			
			
			}
			echo "</table>";echo "</br>";echo "</br>";}
	
	
	//////////////////////		
			if(!$result2)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'In Transit' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysql_fetch_row($result2))
			{
				
				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";
			
			
			}
			echo "</table>";echo "</br>";echo "</br>"; }
	//////////////////////////////
			
			if(!$result3)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "Couriers in 'Delivered' state-->>";echo "</br>";echo "</br>";
			echo "<table>";
			echo"cid &nbsp;&nbsp;&nbsp; orig &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; radd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; rate &nbsp;&nbsp;&nbsp; mode &nbsp;&nbsp;&nbsp; status";
			while( $row=mysql_fetch_row($result3))
			{
				
				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[1]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;</td><td>$row[7]</td><td>&nbsp;&nbsp;</td><td>$row[8]</td><td>&nbsp;&nbsp;</td><td>$row[9]</td></tr>";
			
			
			}
			echo "</table>";}
	/////////////////////
	
			
			if(!$result4)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
			else {
			echo "</br>";echo "</br>";echo "Total Revenue-->> &#x20B9; ";
			$sum = 0;
			while ($row = mysql_fetch_assoc($result4))
			{
    			$sum += $row['rate'];
			}

			echo $sum;
			
			echo "</br>";echo "</br>"; }
			
			
			
        ?>
</body>
</html>
