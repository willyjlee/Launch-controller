<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 17 out");
system("gpio -g write 17 1");
?>
</body>
</html>
