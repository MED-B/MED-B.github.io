<?php

//for alert success
include('connect.php');
if($progress==true): ?>

	<link rel="stylesheet" href="form2.css">


   
	<div class="alert-success" style="position: fixed; top: 0; right:0; width: 60%;
	" >
      <a href="" class="close" data-dismiss="alert" area-label="close">&times;</a>
      Registration complete
    </div>
     
<?php endif ?>
 <style type="text/css">
 	.alert-success{
      background-color: #D5F5E3;
      color: #7DCEA0;
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 5%;
      padding-right: 3%;
      border-radius: 12px;
      font-size: 25px;
      transition: 1s;

 	}
 	.close{
 		float: right;
 		text-decoration: none;
 		font-size: 25px;
 	}
    .close:hover{
    	cursor: pointer;
    	font-weight: 700;

    }
    
 </style>