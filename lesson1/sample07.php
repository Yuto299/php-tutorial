<?php
$i = 1;

while ($i < 366):
  echo $i . '日<br>';
  $i = $i + 1;
endwhile;
?> 
<!-- 効率よくするためにはリファクタリングをおこなう -->