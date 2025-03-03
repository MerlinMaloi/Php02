<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/output.css" rel="stylesheet">
</head>
<body>
  <h1 class="text-5xl font-bold underline">
    Hello world!
  </h1>
  <div>

  <?php 
  date_default_timezone_set('Europe/Moscow');
  $dayw = date("l");
  echo $dayw;
  function workDaysJohnStyles($dayw){
  if ($dayw === 'Monday' or $dayw === 'Wednesday' or $dayw ==='Friday') {
    echo '8:00-12:00' ;
} else {
    echo 'Нерабочий день';
}
};


function workDaysJaneDoe($dayw){
  if ($dayw === "Tuesday" or $dayw === "Thursday" or $dayw === "Saturday"){
    echo '12:00-16:00';
} else {
    echo 'Нерабочий день';
}
};
  
  ?> 
  <table class="table-auto border-collapse border border-gray-400 w-3/4 mx-auto my-6">
  <thead>
    <tr>
      <th class="border border-gray-400 px-4 py-2 bg-gray-100">ID</th>
      <th class="border border-gray-400 px-4 py-2 bg-gray-100">Имя Фамилия</th>
      <th class="border border-gray-400 px-4 py-2 bg-gray-100">График работы</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-gray-400 px-4 py-2">1</td>
      <td class="border border-gray-400 px-4 py-2">John Styles</td>
      <td class="border border-gray-400 px-4 py-2"><?php workDaysJohnStyles($dayw) ?></td>
    </tr>
    <tr>
      <td class="border border-gray-400 px-4 py-2">2</td>
      <td class="border border-gray-400 px-4 py-2">Jane Doe</td>
      <td class="border border-gray-400 px-4 py-2"> <?php workDaysJaneDoe($dayw)?></td>
    </tr>
  </tbody>
</table>
<br>
<?php
$a1 = 0;
$b1 = 0;

for ($i = 0; $i <= 5; $i++) {
   $a1 += 10;
   echo $a1 . "\n";
   $b1 += 5;
   echo $b1 . "\n";
}

echo "End of the loop: a1 = $a1, b1 = $b1 \n";
?><br>
<?php
$a2 = 0;
$b2 = 0;
$i = 0;

while ($i <= 5) {
   $a2 += 10;
   echo $a2 . "\n";
   $b2 += 5;
   echo $b2 . "\n";
   $i++ ;
};

echo "End of the loop: a2 = $a2, b2 = $b2 \n";
?><br>
<?php
$a3 = 0;
$b3 = 0;
$i = 0;

do {
   $a3 += 10;
   echo $a3 . "\n"; 
   $b3 += 5;
   echo $b3 . "\n"; 
   $i ++ ;
} while ($i <= 5);

echo "End of the loop: a3 = $a3, b3 = $b3";

?>
</div>
</body>
</html>