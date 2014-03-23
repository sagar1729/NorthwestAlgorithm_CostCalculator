<?php include('header.php'); ?>
<div id="content">
Enter the size of matrix <br/><br/>
<form method="post" action="matrix.php">
<input type="text" style="width:50px;" name="rows"/> X
<input type="text" style="width:50px;" name="cols"/><br/>
<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
</form>
</div>
<?php include('footer.php'); ?>