<?php
	$config = json_decode(file_get_contents('config.php'), true);

	echo "Isn't ansible great?! This server's IP: " . $config['myip'];
