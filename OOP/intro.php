<!DOCTYPE html>
<html>
<body>

<?php

	interface parent1{
		function sum($a,$b);
	}


	interface parent2{
		function diff($c,$b);
	}

	class Child implements parent1,parent2{
		public function sum($a,$b){
			echo $a+$b;
		}
		public function diff($c,$d){
			echo $c-$d;
		}
	}

	$out = new Child();
	$out->sum(3,5);
	echo "<br/>";
	$out->diff(4,2);


	
	


?>


 
</body>
</html>
