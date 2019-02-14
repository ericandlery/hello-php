<h1>A Weird 9 X 9 Table</h1>
<table border="2">
	<?php
	for($j=1;$j<=9;$j++){
	?>
	<tr>
		<td><?php echo $j;?></td>
		<?php
		for($i=1;$i<=9;$i++){
		    if($i==1){
		        continue;
		    }else{
		        if($j==1){
		            ?>
		        	<td><?php echo $i;?></td>
		        	<?php
		        }else{
		            ?>
		            <td><?php echo $j*$i;?></td>
		            <?php
		        }
		    }
		}
		?>
	</tr>
	<?php
	}
	?>
</table>
<?php

?>