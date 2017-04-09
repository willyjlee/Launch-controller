<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 14 out");
system("gpio -g write 14 1");
?>
</body>
</html>
