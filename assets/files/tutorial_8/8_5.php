<!DOCTYPE html>
     <html> 
     <head> 
  <title>Tutorial-8.5</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h1>PHP script using a nested for loop that creates as shown below:</h1>
   <table width="450px" cellspacing="0px" cellpadding="0px" border="1px">
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=50px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=50px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>
