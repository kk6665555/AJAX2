function myFuncV2(){
	
	document.getElementById('<?php $_GET["where"];?>').innerHTML= <?php echo rand(1,49);?>
}

myFuncV2();