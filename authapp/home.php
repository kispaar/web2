<?php

require 'auth.php';

echo "welcome". $_SESSION['username'];
echo "<a href='logout.php'> logout</a>";

