<?php 
	//Task 1-1
	$name = 'Vadim';
	$age = '24';
	echo "My name is " . $name . '. I am ' . $age . '<br>';
	echo  '“!|/’”\ <br>';
	//Task 1-2
	define("ALL_PICTURES", 80);
		define("FLOM_PICTURES", 23);
	define("PENCIL_PICTURES", 40);
	$color_pictures = ALL_PICTURES - FLOM_PICTURES - PENCIL_PICTURES;
	
	define('COLOR_PICTURES', $color_pictures);
	echo COLOR_PICTURES . '<br>';
	//Task 1-3 
	$age = 17;
	if ($age >= 18 && $age <=65)
		echo 'Вам еще работать и работать <br>';
	elseif ($age > 65) 
		echo "Вам пора на пенсию";
	elseif ($age < 18 && $age > 1)
		echo "Вам ещё рано работать <br>"; 
	else 
		echo "Неизвестный возраст <br>";
	// task 1-4
	$day = 29;
	switch ($day) {
	case 1:
    case 2:
    case 3:
    case 4:
    case 5:
	    echo "Это рабочий день <br>";
	    break;
	case 6:
	case 7:
	    echo "Это выходной день <br>";
	    break;
	default:
       echo "Неизвестный день<br>";
	}
	//Task1-5
	// $bmw = array('model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015');

	// $opel = array('model' => 'astra', 'speed' => '120', 'doors' => '4', 'year' => '2018');
	// $toyota = array('model' => 'corolla', 'speed' => '140', 


	$cars =  array('bmw' => array('name' => 'BMW', 'model' => 'X5', 'speed' => '120', 'doors' => '5', 'year' => '2015'), 
		'opel' => array('name' => 'Opel','model' => 'astra', 'speed' => '120', 'doors' => '4', 'year' => '2018'), 
		'toyota' => array('name' => 'Toyota', 'model' => 'corolla', 'speed' => '140', 'doors' => '4', 'year' => '2017'));

	foreach($cars as $car )
	{
		echo "<br>CAR <br>";
	foreach($car  as  $key => $value)
	{
	echo " $value ";
	}
	}

//Task 1-6
	$rows = 10;
	$cols = 10;

echo '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ 
    	$summa = $tr*$td;
    	if ($summa % 2 == 0){
    		 echo '<td>'. '(' . $summa .')' .'</td>';
    	} else {
			echo '<td>'. '[' . $summa .']' .'</td>';
    	}

        
    }
    echo '</tr>';
}

echo '</table>';
?>

