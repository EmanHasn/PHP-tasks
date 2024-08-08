<?php
//no.1
echo "<h2>no.1</h2>";
echo "hello world";
//no.2
echo "<h2>no.2</h2>";
$y="Welcome";
$z=true;
echo "<br>", $y," ",$z, "<br>";

echo "<h2>no.3</h2>";
echo gettype($y), " " , gettype($z)."<br> ";

echo "<h2>no.4</h2>";
echo "<h2>first way</h2>";
function serial()
{
    static $num=0;
    echo $num++ , "<br>";
}
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();
serial();

echo "<h2>second way with global</h2>";
$num=0;
function serial2()
{
    global $num;
    echo $num++ , "<br>";
}

serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();
serial2();

echo "<h2>third way</h2>";
//by for loop
echo "<h2>with for loop</h2>";
for($n=0;$n<=15;$n++)
{
    echo $n ,"<br>";
}
echo "<h2>forth way</h2>";
//by while
echo "<h2>with while loop</h2>";
$i=0;
while($i<=15)
{
     echo $i ,"<br>";
     $i++;
}
echo "<h2>constant value</h2>";

echo "<h2>no.5</h2>";
define("value" , "ITI");
echo value ,"<br>";
echo "<h2>no.6</h2>";

echo gettype(value);

//no.7 isset (check if var is empty or not)
echo "<h2>no.7</h2>";

echo "<h2>isset()fun=>not null</h2>";
$i=0;
if(isset($i))
{echo "value not null";}
    else{
        echo " value is null";
    }
    echo "<h2>isset()fun=>null</h2>";
    $nullVal=null;
if(isset($nullVal))
{echo "value not null";}
    else{
        echo " value is null";
    }
    echo "<h2>no.8</h2>";

    echo "<h2>empty()fun=>not null ==>==> empty when val = 0 0.0 '0' '' null false </h2>"; // empty when val = 0 0.0 "0" "" null false
    if(empty($i))
{echo "value empty";}
    else{
        echo " value not empty";
    }
 echo "<h2>no.9 add()</h2>";

 function add()
 {
    $n=50;
    $m=10;
    $result=$n+$m;
    return $result>50 ? "Accepted" : "not Accepted";
 }
 echo add();

 echo "<h2>no.10 table</h2>";

 echo "<table style='border-collapse:collapse; border:1px solid #000'>
            <tr>
                <td style='border: 1px solid #000 ; color:blue;'>Salary of Mr. A is</td>
                <td style='border: 1px solid #000'>1000$</td>
            </tr>
            <tr>
                <td style='border: 1px solid #000 ; color:blue;'>Salary of Mr. B is</td>
                <td style='border: 1px solid #000'>1200$</td>
            </tr>
            <tr>
                <td style='border: 1px solid #000 ; color:blue;'>Salary of Mr. C is</td>
                <td style='border: 1px solid #000'>1400$</td>
            </tr>
    </table>";
    echo "<h2>no.11 number to string</h2>";
    function convertToString($intVar)
    {
        $StringVar=(string)$intVar;
        return $StringVar;
    };
    echo convertToString(55),"<br>";
    echo gettype(convertToString(55));

    echo "<h2>second way no.11 number to string => strval()</h2>";
    function convertToString2($intVar2)
    {
        $StringVar2=strval($intVar2);
        return $StringVar2;
    };
    echo convertToString2(700),"<br>";
    echo gettype(convertToString2(700));

?>
