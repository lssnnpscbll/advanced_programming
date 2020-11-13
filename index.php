<?php 
//Name: Lessa Anne P. Pascubillo
//Subject: Advance Programming
// Professor: Ms. Blances Sanchez ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>assign_one</title>
    </head>
        <body>
        <div class="container-fluid"><center>
            <div class="row">
                <div class="col-md-4">
                    <br><br><h1><?php echo "Lessa Anne P. Pascubillo" ?></h1>
                </div>

                <div class="col-md-4">
                <form action="" method="post">
                    <br><br><b>CALCULATOR</b><br><br> 
                    
                        Enter First Number:  
                    <input type="number" name="number1" /><br><br>  
                        Enter Second Number:  
                    <input type="number" name="number2" /><br><br>  

                    <input  type="submit" name="sum" class="button" value="+">
                    <input  type="submit" name="sub" class="button" value="-"> 
                    <input  type="submit" name="mul" class="button" value="*"> 
                    <input  type="submit" name="div" class="button" value="/">   
                </form> 

                <?php      
                    if(array_key_exists('sum', $_POST)) { 
                        sum1(); 
                    } 
                    else if(array_key_exists('sub', $_POST)) { 
                        sub1(); 
                    } 
                    else if(array_key_exists('mul', $_POST)) { 
                        mul1(); 
                    } 
                    else if(array_key_exists('div', $_POST)) { 
                        div1(); 
                    } 
                    function sum1() { 
                        $number1=$_POST['number1'];   
                        $number2=$_POST['number2'];   
                        $sum = $number1 + $number2;
                        echo "<br><br>";
                        echo "Answer: ".$sum;  

                    } 
                    function sub1() { 
                        $number1=$_POST['number1'];   
                        $number2=$_POST['number2'];   
                        $sub = $number1 - $number2;
                        echo "<br><br>";
                        echo "Answer: ".$sub;   
                    } 
                    function mul1() { 
                        $number1=$_POST['number1'];   
                        $number2=$_POST['number2'];   
                        $mul = $number1 * $number2;
                        echo "<br><br>";
                        echo "Answer: ".$mul;   
                    } 
                    function div1() { 
                        $number1=$_POST['number1'];   
                        $number2=$_POST['number2'];   
                        $div = $number1 / $number2;
                        echo "<br><br>";
                        echo "Answer: ".$div;   
                    } 
                    ?>
                </div>

                <div class="col-md-4">
                <form action="" method="post">
                        <br><br><b>FINDING GCD</b><br><br>
                        Enter First Number:  
                    <input type="number" name="a" /><br><br>  
                            Enter Second Number:  
                    <input type="number" name="b" /><br><br>  

                    <input  type="submit" name="submit" value="Submit"> 
                </form>

                <?php

                    if(array_key_exists('submit', $_POST)) { 
                        gcd1(); 
                    } 

                    function gcd1() {
                        $a=$_POST['a'];   
                        $b=$_POST['b'];
                        $gcd; 

                            if ($a > $b)
                            {
                            $temp = $a;
                            $a = $b;
                            $b = $temp;
                            }
                            for($i = 1; $i < ($a+1); $i++)
                            {
                            if ($a%$i == 0 and $b%$i == 0)
                                $gcd = $i;
                            }

                            echo "<br>GCD: $gcd";
                    }
                   
                    ?>
                </div>
            </div>
        </div></center>
        </body>
</html>