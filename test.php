<?php

function add_action($hook, $callback) {
	echo "action added for $hook\n";
}

require_once 'eckerd-rss-tweaks.php';

echo "nothing broke\n";
