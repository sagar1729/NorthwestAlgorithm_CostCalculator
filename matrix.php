<?php include('header.php'); ?>
<div id="content">
<?php
$nrows = $_POST['rows'];
$ncols = $_POST['cols'];
?>
<form method="post" action="answer.php">
<table>
<?php
for($i=0;$i<$nrows;$i++)
{ echo "<tr>";
for($j=0;$j<$ncols;$j++)
{
echo "<td><input type='text' style='width:50px;' name='".$i.$j."'/></td>";
}
echo "</tr>";
}
?>
</table>
<br/>
Enter Supply:
<br/>
<table>
<tr>
<?php
for($i=0;$i<$nrows;$i++)
{
echo "<td><input type='text' style='width:50px;' name='s".$i."'/></td>";
}
?>
</tr>
</table>
<br/>
Enter Demand:
<br/>
<table>
<tr>
<?php
for($j=0;$j<$ncols;$j++)
{
echo "<td><input type='text' style='width:50px;' name='d".$j."'/></td>";
}
?>
</tr>
</table>
<input type="hidden" value="<?php echo $nrows; ?>" name="rows"/>
<input type="hidden" value="<?php echo $ncols; ?>" name="cols"/>
<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
</form>
</div>
<?php include('footer.php'); ?>