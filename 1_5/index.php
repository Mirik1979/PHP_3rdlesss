<html>
<head>
    <title><?php echo "Задания 1_5!";?></title>
</head>
<body>
<?php echo '<h2>'."Первое задание".'</h2>';?>
<div>
<?php
$a = 0;
$b = 100;
while ($a <= $b) {
	if (($a % 3) == 0) { 
		echo "$a " ;
	}
	$a++;
	# code...
}
?>
<?php echo '<h2>'."Второе задание".'</h2>';?>
<div>
<?php
$n = 10;
$i = 0;
do {
	if ($i == 0) {
		echo "$i - это ноль <br/>";
	}
	elseif (($i % 2) == 0) {
		echo "$i - это четное число <br/>";
		# code...
	}
	else {
		echo "$i - это нечетное число <br/>";
	}
	$i++;
} while ($i <= $n) 
?>
</div>
<?php echo '<h2>'."Третье задание".'</h2>';?>
<div>
<?php
	$geo = [];
	$geo['Moscowobl'] = [
		'city1' => 'Апрелевка',
		'city2' => 'Балашиха',
		'city3' => 'Видное' ];
	$geo['Lenobl'] = [
		'city1' => 'Выборг',
		'city2' => 'Гатчина',
		'city3' => 'Ивангород' ];

	foreach($geo as $region => $massiv)
	{
		echo "$region:";
		foreach($massiv  as  $inner_key => $value)
		{
			echo "[$inner_key] = $value";
		}
		echo "<br/>";
	}	
?>
</div>
<?php echo '<h2>'."Четвертое задание".'</h2>';?>
<div>
<?php
	$translit = [
		'а' => 'a',   'б' => 'b',   'в' => 'v',  
       'г' => 'g',   'д' => 'd',   'е' => 'e',  
       'ё' => 'yo',   'ж' => 'zh',  'з' => 'z',  
       'и' => 'i',   'й' => 'j',   'к' => 'k',  
       'л' => 'l',   'м' => 'm',   'н' => 'n',
       'о' => 'o',   'п' => 'p',   'р' => 'r',
       'с' => 's',   'т' => 't',   'у' => 'u',
       'ф' => 'f',   'х' => 'x',   'ц' => 'c',
       'ч' => 'ch',  'ш' => 'sh',  'щ' => 'shh',
       'ь' => '\'',  'ы' => 'y',   'ъ' => '\'\'',
       'э' => 'e\'',   'ю' => 'yu',  'я' => 'ya',  
        'А' => 'A',   'Б' => 'B',   'В' => 'V',  
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',  
        'Ё' => 'YO',   'Ж' => 'Zh',  'З' => 'Z',  
        'И' => 'I',   'Й' => 'J',   'К' => 'K',  
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',  
        'О' => 'O',   'П' => 'P',   'Р' => 'R',  
        'С' => 'S',   'Т' => 'T',   'У' => 'U',  
        'Ф' => 'F',   'Х' => 'X',   'Ц' => 'C',
        'Ч' => 'CH',  'Ш' => 'SH',  'Щ' => 'SHH',
        'Ь' => '\'',  'Ы' => 'Y\'',   'Ъ' => '\'\'',
        'Э' => 'E\'',   'Ю' => 'YU',  'Я' => 'YA' ];  
       $word = strtr('прочее', $translit); // транслитерация. Переменная $word получит значение 'prochee'
       echo "$word";
?>
</div>
<?php echo '<h2>'."Пятое задание".'</h2>';?>
<div>
<?php
	function delBackspace ($str) {
        $text = [
        " " => "_"      
                ];
        return strtr($str, $text);
}
echo delBackspace("Мама мыла раму");
?>
</div>
</body>
</html>