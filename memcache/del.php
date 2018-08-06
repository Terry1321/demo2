<?php 

	$mem=new Memcache();
	$mem->connect('127.0.0.1','11211');


	if ($mem->flush()) {
		echo "<script>location='index.php'</script>";
	}

 ?>