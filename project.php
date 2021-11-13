<?php
									//============================
									//	KNOWLEDGE REPRESENTATION 
									//============================

$towns_connections = array(
	'menoof'		=>array( 'elshohadaa' , 'elsadat' , 'sers ellaban' , 'shbeen') , 
	'shbeen'		=>array('tala' , 'menoof' , 'berket elsab3' , 'quesna') , 
	'elbagoor'		=>array('sers ellaban') , 
	'tala'			=>array('shbeen') , 
	'ashmoon'		=>array('elsadat') , 
	'elsadat'		=>array('menoof' , 'ashmoon') , 
	'quesna'		=>array('shbeen' , 'berket elsab3') , 
	'elshohadaa'	=>array('menoof') , 
	'berket elsab3'	=>array('shbeen' , 'quesna') , 
	'sers ellaban'	=>array('menoof' , 'elbagoor'));

$x_coordinates = array(
	'menoof'		=>419 , 
	'shbeen'		=>480 , 
	'elbagoor'		=>509 , 
	'tala'			=>435 , 
	'ashmoon'		=>460 , 
	'elsadat'		=>62 , 
	'quesna'		=>600 , 
	'elshohadaa'	=>400 , 
	'berket elsab3'	=>560 , 
	'sers ellaban'	=>405);

$y_coordinates = array(
	'menoof'		=>285 , 
	'shbeen'		=>200 , 
	'elbagoor'		=>327 , 
	'tala'			=>55 , 
	'ashmoon'		=>457 , 
	'elsadat'		=>405 , 
	'quesna'		=>215 , 
	'elshohadaa'	=>150 , 
	'berket elsab3'	=>120 , 
	'sers ellaban'	=>304);

$towns_distances = array(
						'shbeen'		=>array(
											'tala'=> 16.3,
											'elshohadaa'=> 14.3,
											'berket elsab3'=> 15.2,
											'quesna'=> 18.3,
											'shbeen'=> 0,
											'menoof'=> 17.9,
											'sers ellaban'=> 16.2,
											'elbagoor'=> 16.2,
											'ashmoon'=> 39.1,
											'elsadat'=> 67.5) , 
						'tala'			=>array(
											'tala'=> 0,
											'elshohadaa'=> 13.7,
											'berket elsab3'=> 19.7,
											'quesna'=> 32.8,
											'shbeen'=> 16.3,
											'menoof'=> 32,
											'sers ellaban'=> 31.5,
											'elbagoor'=> 31.9,
											'ashmoon'=> 56.5,
											'elsadat'=> 77.5) , 
						'menoof'		=>array(
											'tala'=> 32,
											'elshohadaa'=> 22.8,
											'berket elsab3'=> 31.6,
											'quesna'=> 33.7,
											'shbeen'=> 17.9,
											'menoof'=> 0,
											'sers ellaban'=> 7.2,
											'elbagoor'=> 17.1,
											'ashmoon'=> 24.1,
											'elsadat'=> 57.6) , 
						'sers ellaban'	=>array(
											'tala'=> 31.5,
											'elshohadaa'=> 27.1,
											'berket elsab3'=> 30.1,
											'quesna'=> 32.5,
											'shbeen'=> 16.2,
											'menoof'=> 7.2,
											'sers ellaban'=> 0,
											'elbagoor'=> 8.3,
											'ashmoon'=> 22.2,
											'elsadat'=> 62.6) , 
						'berket elsab3'	=>array(
											'tala'=> 19.7,
											'elshohadaa'=> 28.9,
											'berket elsab3'=> 0,
											'quesna'=> 17.1,
											'shbeen'=> 15.2,
											'menoof'=> 31.6,
											'sers ellaban'=> 30.1,
											'elbagoor'=> 29.2,
											'ashmoon'=> 51.5,
											'elsadat'=> 82) , 
						'ashmoon'		=>array(
											'tala'=> 56.5,
											'elshohadaa'=> 41.6,
											'berket elsab3'=> 51.5,
											'quesna'=> 50.1,
											'shbeen'=> 39.1,
											'menoof'=> 24.1,
											'sers ellaban'=> 22.2,
											'elbagoor'=> 21,
											'ashmoon'=> 0,
											'elsadat'=> 75) , 
						'elbagoor'		=>array(
											'tala'=> 31.9,
											'elshohadaa'=> 30.7,
											'berket elsab3'=> 29.2,
											'quesna'=> 33.7,
											'shbeen'=> 16.2,
											'menoof'=> 17.1,
											'sers ellaban'=> 8.3,
											'elbagoor'=> 0,
											'ashmoon'=> 21,
											'elsadat'=> 70.6) , 
						'quesna'		=>array(
											'tala'=> 32.8,
											'elshohadaa'=> 30.8,
											'berket elsab3'=> 17.1,
											'quesna'=> 0,
											'shbeen'=> 18.3,
											'menoof'=> 33.7,
											'sers ellaban'=> 32.5,
											'elbagoor'=> 33.7,
											'ashmoon'=> 50.1,
											'elsadat'=> 87.7) , 
						'elshohadaa'	=>array(
											'tala'=> 13.7,
											'elshohadaa'=> 0,
											'berket elsab3'=> 28.9,
											'quesna'=> 30.8,
											'shbeen'=> 14.3,
											'menoof'=> 22.8,
											'sers ellaban'=> 27.1,
											'elbagoor'=> 30.7,
											'ashmoon'=> 41.6,
											'elsadat'=> 78.9) , 
						'elsadat'		=>array(
											'tala'=> 77.5,
											'elshohadaa'=> 78.9,
											'berket elsab3'=> 82,
											'quesna'=> 87.7,
											'shbeen'=> 67.5,
											'menoof'=> 57.6,
											'sers ellaban'=> 62.6,
											'elbagoor'=> 70.6,
											'ashmoon'=> 75,
											'elsadat'=> 0) , 
	);

$visited = array();
$A_star_array = array();

		//====================================================================================

									//============
									//	THE FORM 
									//============
?>
<html>
	<head>
        <title> Select </title> 
         <meta charset="utf-8">
            <!-- make IE mtw2f2 m3a bootstrap -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- da byd3m elmobil w y5le 4a4t brwoser nfs 3rd 4a4a bta3 project bta3e   -->
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="select.css">    
	</head>
	
	<body>
        
        <div class="select">
            <form action="project.php" method="POST">
                <select name="initial">
                    <option>go from</option>
                    <option>menoof</option>
					<option>shbeen</option>
					<option>elsadat</option>
					<option>elshohadaa</option>
					<option>tala</option>
					<option>elbagoor</option>
					<option>ashmoon</option>
					<option>quesna</option>
					<option>berket elsab3</option>
					<option>sers ellaban</option>
                </select>
                <select name="goal">
                    <option>go to</option>
                    <option>menoof</option>
					<option>shbeen</option>
					<option>elsadat</option>
					<option>elshohadaa</option>
					<option>tala</option>
					<option>elbagoor</option>
					<option>ashmoon</option>
					<option>quesna</option>
					<option>berket elsab3</option>
					<option>sers ellaban</option>
                </select>

                <select name="search_technique">
                    <option>serach method</option>
                    <option>depth first</option>
					<option>breadth first</option>
					<option>A*</option>
					<option>greedy</option>
                </select>
                <button type="submit" name="submit"> Start Search </button>
            </form>
            <?php

	        if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if($_POST['search_technique'] == 'breadth first')
				{
					$initial[] 	= $_POST['initial'];
					$goal	 	= $_POST['goal'];
					$result = explode(',', breadth_first_search($initial, $goal));
					echo "<div class='result'>";
					echo "<span>Your Path From ".$initial[0]." To ".$goal." Is :</span></br>";
					$to_print = $initial[0];
					$city = $initial[0];
					for ($i=1; $i < count($result); $i++) 
					{ 
						$city = $towns_connections[$city][$result[$i]];
						$to_print.= " => " . $city;
					}
					echo "<span>" . $to_print . "</span></div>";
				}

				if($_POST['search_technique'] == 'depth first')
				{
					$initial = $_POST['initial'];
					$goal	 = $_POST['goal'];

					echo "<div class='result'>";
					echo "<span>Your Path From ".$initial ." To ".$goal." Is :</span></br>";
					echo "<span>" . $initial . " => " .depth_first_search($initial, $goal)
						 . "</span></div>";
				}

				if($_POST['search_technique'] == 'greedy')
				{
					$initial = $_POST['initial'];
					$goal	 = $_POST['goal'];
					echo "<div class='result'>";
					echo "<span>Your Path From ".$initial ." To ".$goal." Is :</span></br>";
					echo "<span>" . $initial . " => " .best_first_search($initial, $goal)
						 . "</span></div>";
				}

				if($_POST['search_technique'] == 'A*')
				{
					$initial = $_POST['initial'];
					$goal	 = $_POST['goal'];
					echo "<div class='result'>";
					echo "<span>Your Path From ".$initial ." To ".$goal." Is :</span></br>";
					echo "<span>" .A_star_technique($initial, $goal). "</span></div>";
				}
			}

	        ?>
        </div>
    </body>
</html>
<?php

		//====================================================================================

									//=========================
									//	DEPTH FIRST TECHNIQUE 
									//=========================

function depth_first_search($current_town , $goal)
{
	global $towns_connections;
	global $visited;

	$visited[] = $current_town;

	for($i=0 ; $i<count($towns_connections[$current_town]);$i++)
	{
		if(in_array($towns_connections[$current_town][$i], $visited))
			continue;

		if($towns_connections[$current_town][$i] == $goal)
		{
			return $towns_connections[$current_town][$i];
		}
		else
		{
			$resault = depth_first_search($towns_connections[$current_town][$i] , $goal);
			if($resault)
				return $towns_connections[$current_town][$i] . "=>" . $resault;
		}
	}
	return false;
}
									//===========================
									//	BREADTH FIRST TECHNIQUE
									//===========================

function breadth_first_search($current_town , $goal)
{
	global $towns_connections;
	$to_visit=array();
	$nodes_counter=0;
	$index_array;

	for($j=0 ; $j<count($current_town);$j++)
	{
		for($i=0 ; $i<count($towns_connections[$current_town[$j]]);$i++)
		{
			$index_array[$nodes_counter] = $j.','.$i;
			// the city number (node counter) i will send .. is the index number (i) of the node number (j) i have revieved ...
			$nodes_counter++;

			if($towns_connections[$current_town[$j]][$i] == $goal)
				return $j .','.$i;
			else
				$to_visit[] = $towns_connections[$current_town[$j]][$i];
		}
	}
	$resault = breadth_first_search($to_visit , $goal);
	if($resault)
	{
		$result_as_array = explode(',', $resault);
		$result_as_array[0] = $index_array[$result_as_array[0]];
		$final_result= implode(',', $result_as_array);
		return $final_result;
	}
	else
		return false;
}

									//========================
									//	BEST FIRST TECHNIQUE
									//========================

function best_first_search($current_town , $goal)
{
	global $towns_connections;
	global $visited;
	$sorted_array = array();

	$visited[] = $current_town;

	for($i=0 ; $i<count($towns_connections[$current_town]);$i++)
	{
		$town_in_turn 		= $towns_connections[$current_town][$i];
		$estimated_distance = calculate_heuristic_function($town_in_turn , $goal);
		$sorted_array[$town_in_turn] = $estimated_distance;
	}
	asort($sorted_array);

	foreach ($sorted_array as $town => $distance) 
	{
		if(in_array($town, $visited))
			continue;

		if($town == $goal)
		{
			return $town;
		}
		else
		{
			$resault = best_first_search($town , $goal);
			if($resault)
				return $town . "=>" . $resault;
		}
	}
	return false;
}

									//====================
									//	A STAR TECHNIQUE
									//====================


function A_star_technique($current_town_path , $goal , $previous_distance=0)
{
	global $towns_connections;
	global $towns_distances;
	global $A_star_array;

	$current_town 	= explode(' => ', $current_town_path);
	$current_town 	= end($current_town);

	for($i=0 ; $i<count($towns_connections[$current_town]);$i++)
	{
		$town_in_turn 		= $towns_connections[$current_town][$i];
		$estimated_distance = calculate_heuristic_function($town_in_turn , $goal);
		$real_distance		= $previous_distance + $towns_distances[$current_town][$town_in_turn];
		$A_star_array[$current_town_path. " => " .$town_in_turn] = $real_distance + $estimated_distance;

	}
	asort($A_star_array);

	foreach ($A_star_array as $town_path => $distance) 
	{
		$town_path_to_be_saved 	= $town_path;
		$distance_to_be_saved 	= $distance;
		$town 					= explode(' => ', $town_path);
		$town 					= end($town);
		$estimated_distance 	= calculate_heuristic_function($town , $goal);
		if($town == $goal)
		{
			return $town_path;
		}
		else
		{
			array_shift($A_star_array);
			$resault = A_star_technique($town_path_to_be_saved , $goal , 
										$distance_to_be_saved-$estimated_distance);
			if($resault)
				return $resault;
		}
	}
	return false;
}

		//============================================================================


function calculate_heuristic_function($initial , $goal)
{
	global $x_coordinates;
	global $y_coordinates;

	$x1 = $x_coordinates[$initial];
	$x2 = $x_coordinates[$goal];
	$y1 = $y_coordinates[$initial];
	$y2 = $y_coordinates[$goal];

	return sqrt(pow($x1-$x2, 2) + pow($y1-$y2, 2));
}