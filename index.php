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
</div>
</body>
</html>