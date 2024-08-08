<?php
//no.1
echo "<h2>no.1</h2>";
$arr=["PHP", "Open Source", "ITI", "Day2", "Arrays"];
print_r($arr);
echo "<h2>no.2- first way</h2>";
foreach($arr as $val)
{
 echo $val , "<br>";   
}
echo "<h2>no.2-second way</h2>";
$length = count($arr);
for($x=0;$x<$length;$x++)
{
    echo $arr[$x] , "<br>";
};

//no.3
echo "<h2>no.3&4</h2>";
$info = ["Name" => "Nadia", "Age" => "20", "Email" => "Nadia@gmail.com", "Collage" => "SCI"];

foreach($info as $key => $value ){
    echo "<table style='border-collapse:collapse; border:1px solid #000; width:250px'>
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
    </table>";
        }
//no.5
echo "<h2>no.5</h2>";
echo "<h4>sort by value</h4>";
echo "<h5>sort by value asc</h5>";
    asort($info);
    print_r($info);
 
 echo "<h5>sort by key</h5>";
    ksort($info); 

    echo "<h2>no.6</h2>";
 //no.6  function infoay_keys() return array contains keys
  print_r(array_keys($info));

?>