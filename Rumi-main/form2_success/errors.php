<?php
 include'connect.php';
  if(count($errors)>0): 
  	?>
	<div class="error">
		<?php
		 foreach ($errors as $error ) :
		 	?>
			<p> <?php echo $error; ?> </p>
		<?php
		 endforeach  
		 ?>
	</div>
<?php
 endif 
  ?>
<style type="text/css">
	.error{
	position: relative;
	 width: 92%;
	 font-size: 17px;
	 padding: 10px;
	  background-color:#f2dede;
	  color: #a94442;
	  text-align: left;
      border-radius: 5px;
      margin:5px auto;

	}
</style>