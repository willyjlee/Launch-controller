<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 2 out");
system("gpio -g write 2 1");
?>
</body>
</html>
