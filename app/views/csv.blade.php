



@extends('_master')
@section ('csv')

<?php 

//header('Content-Type: text/csv; charset=utf-8');
//header('Content-Disposition: attachment; filename=data.csv');

//$output = fopen('php://output', 'w');
//fputcsv($output, array('name', 'address'));



$faker = Faker\Factory::create();

$file = 'people.csv';
file_put_contents($file, "");

// Open the file to get existing content
$current = file_get_contents($file);

for ($i=1; $i<=$numusers; $i++)
{
	$current .= $faker->name;
	$current .= ",";

	//now find the comma in the address and replace with ;
$next = $faker->address;
	$newaddr=str_replace(',',';',$next); 
	//$newaddr2=str_replace('\n',';',$newaddr);  

	$newaddr2 = str_replace(array("\n","\r\n"), '', $newaddr);

	$current .= $newaddr2;
	
	$current .= "\n";
}

// Write the contents back to the file
file_put_contents($file, $current);


echo '<h2><a href="people.csv">or get file</a></h2>';

?>
@stop







