<html>
    <body>
    <form action="<?php echo $_SERVER ["PHP_SELF"] ?>" method="post">
    Anfang bei 2:<br />
    <input type="zahl" name="start"><br>
    Ende bis 22:<br />
    <input type="zahl" name="ende"><br>
    <input type="submit" value="bestaetigen..."><br>
    
    
<?php 
$start= 3;
$ende=22;    

        function addieren($n)
        {
        if ($n > 22)
            {
            return;
            }
            echo $n;
            addieren($n + 1);
                 if($n == "3")
            {
            echo "\nfoo\n";
            }
             if($n == "5")
            {
            echo "\nbar\n";
            }
             if($n == "6")
            {
            echo "\nfoo\n";
            }
             if($n == "9")
            {
            echo "\nfoo\n";
            }
             if($n == "10")
            {
            echo "\nbar\n";
            } 
             if($n == "12")
            {
            echo "\nfoo\n";
            } 
            if($n == "15")
            {
            echo "\nfoobar\n";
            } 
            if($n == "18")
            {
            echo "\nfoo\n";
            }
            if($n == "20")
            {
            echo "\nbar\n";
            }
            if($n == "21")
            {
            echo "\nfoo\n";
            }
        
}            
        
         addieren($start);
    
                   
?>
       

    </body>
</html>        