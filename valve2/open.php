<!DOCTYPE html>
<html>
<body>
<?php
echo "php loaded";
system("gpio -g mode 3 out");
system("gpio -g write 3 1");
?>
</body>
</html>
