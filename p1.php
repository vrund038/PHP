<?php
    $event=readline("Enter The Event : ").PHP_EOL;
    echo $event;

    $fname=readline("Enter your First Name :");
    $lname=readline("Enter your Last Name :");

    print( "Hello {$fname} is {$lname}").PHP_EOL;
    $num=readline("Enter the Number of Guests :").PHP_EOL;
    $time=readline("Enter the minutes :").PHP_EOL;


    //cost for time
    $costperhour=18.50;
    $costperminute=.40;
    $costofdinner=20.70;

    //find number of server
    $numserver=ceil($num/20);
    echo "Number of servent {$numserver}".PHP_EOL;



    $cost1=($time/60)*$costperhour;//if time is 100 then 100 / 60 then remain 40 
    $cost2=($time%60)*$costperminute;//40*minute cost
    $serventcost=$cost1+$cost2;

    echo $serventcost.PHP_EOL;


    $foodcost=$num * $costofdinner;
    echo $foodcost;


    $averagecostguest=$foodcost/$num;
    echo "Average cost per guest is : {$averagecostguest}".PHP_EOL;


    $totalcost=$foodcost+($serventcost*$numserver);

    echo "Total Cost is : {$totalcost}".PHP_EOL;

?>