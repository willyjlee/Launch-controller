<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 4 out");
system("gpio -g write 4 0");
?>
</body>
</html>
