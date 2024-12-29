<?php
$fruits = [
  'apple' => 'リンゴ', 
  'grape' => 'ブドウ',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'モモ'
]; 
?>
<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
    <dt><?php echo $english; ?></dt>
    <dd><?php echo $japanese; ?></dd>
  <?php endforeach; ?>
</dl>