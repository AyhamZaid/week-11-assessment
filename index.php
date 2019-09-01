<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. 
*/
//////////////////////// Your Code Here /////////////////////
echo('<h1>Question 1 :<br></h1>');
$salary = 1000;
$salary2 = 700;
echo ('<table style="width:50%" border = 1px solid red>');
 echo('<tr>');
   echo ('<th>Sallary For Ayham</th>');
   echo ("<td>$salary</td>");
   echo ('</tr>');
   echo('<tr>');
   echo(' <th>Salary for Ahamd</th>');
   echo ("<td>$salary2</td>");
   echo('</tr>');
   echo('</table>');


   echo('<br>');
   echo('<br>');
   echo('<br>');
   echo('<br>');
   echo('<br>');
/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

               echo('<h1>Question 2 :</h1><br>');
asort($countries) ;
foreach($countries as $country => $capital)
{
echo " <li>The Capital of $country is $capital" ." ."."\n</li>" ;
}

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/
echo ('<br> <br>');
echo('<h1>Question 3 :<br><br></h1>');
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo ' :) ';
}
echo '<br>';
}
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo ' :( ';
}
echo '<br> ';
}



/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days
*/
echo ('<br>');
echo('<h1>Question 4 :</h1><br>'); 

$d1 = strtotime("1981-11-04");  
$d2 = strtotime("2013-09-04");   
$absDiff= abs($d2 - $d1);   
$years = floor($absDiff / (365*60*60*24));   
$months = floor(($absDiff - $years * 365*60*60*24) / (30*60*60*24));  
$days = floor(($absDiff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
$result=( "$years : years, $months : months,$days : days"); 
echo $result;



/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */


echo ('<br> <br>');
echo('<h1>Question 5 :</h1><br><br>');

?>
<!DOCTYPE html>
<html>
<style>
body{
    background-color:#111;
    color: red;
}
h1{
    color:red;

}
form{
    border:1px solid red;
    width:300px;
}
</style>
   <body>
   <form method='POST'>
   <h2 >Enter your name:</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 <?php
$name = $_POST['name'];
echo "<h1> Hello $name </h1>";
?>
 </form>

</body>
</html>
