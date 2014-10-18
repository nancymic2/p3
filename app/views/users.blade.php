@extends('_master')

@section ('users')

<?php 
$faker = Faker\Factory::create();
for ($i=1; $i<=$numusers; $i++)
{
echo '<h3>';
echo $faker->name;
echo '</h3>';
//echo '<br>';
echo $faker->address;
echo '<br>';
echo '<br>';
}
?>
@stop


