<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 15 out");
system("gpio -g write 15 0");
?>
</body>
</html>
