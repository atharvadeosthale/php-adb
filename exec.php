<?php

shell_exec("cd cms");
$x=shell_exec("adb devices");
shell_exec("adb reboot");
echo $x;