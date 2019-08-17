<!DOCTYPE html> <html> <head> <title>BACKUP</title> <style> body {background-color: white;
	background: #ffffff url("backupimage.JPG") no-repeat;
	background-position: 75%; ;
	margin-right: 200px;
		}
h1 {color: blue;
		margin-left: 30%;
        font-size: 40px;} h2 {color: black;
		  font-family: "Times New Roman", Times, serif;
		font-size: 30px;} h4:hover {
  color: red;
  h4 {color: black;
		  font-family: "Times New Roman", Times, serif;
		font-size: 15px;}
}
</style> </head> <body>
     <h1><u>Restore CloudPlusBox</u></h1>
	 <h2>Folgen Sie den untenstehenden Schritten</h2>
     <h4>2.Prüfen Sie die letzte Zeile der unten angezeigten Box. Wenn am Ende der letzten Zeile /media/backup/<br> angezeigt wird, klicken Sie "RESTORE". Wenn 
nicht, klicken Sie "REBOOT".</h4>
	 
	
	    
<pre> <?php exec("sudo umount /dev/sda1"); exec("sudo mount /dev/sda1 /media/backup/"); echo "\r\n"; exec("df -h ", $arr); print_r($arr); echo "\n"; echo "\n"; 
?> </pre>
	 <div style="display: inline-block;margin-left:2%;";>
    
	<div style="float: left";>
        <form action="reboot.php">
			 <input type="submit" value="REBOOT" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </form>
    </div>
	<div style="float: right">
        <form action="restore.php" >
            <input type="submit" value="RESTORE" >
        </form>
    </div>
	</div>
     
     
 </body> </html>
