<?php

$nums = [];

for($i = 0;$i < 5; $i++){
  $col = range($i * 15 + 1,$i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col,0,5);
}

$nums[2][2] = 'free';

// var_dump($nums);
// exit;

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bingo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id='container'>
    <table>
      <tr>
        <th>b</th><th>i</th><th>n</th><th>g</th><th>o</th>
      </tr>
      <?php for($i=0;$i<5;$i++): ?>
      <tr>
        <?php for($j=0;$j<5;$j++): ?>
          <td><?php echo h($nums[$j][$i]) ?></td>
          
        <?php endfor ?>  
      </tr>
      <?php endfor ?>
    </table>
  </div>


  
</body>
</html>



