
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require 'LinkToPython.php' ;
        
        $ltp = new LinkToPython(2);
        
        $_POST['a00'] = 2.5 ;
        $_POST['a01'] = 3.0 ;
        $_POST['a10'] = 7.0 ;
        $_POST['a11'] = 8.0 ;
        
        $ltp->setMatrice();
        
        
        echo ' var_dump($ltp->fadeev()); <br>';
        $ltp->fadeev();
        /*echo ' var_dump($ltp->getResultat(0,0));';
        $res00 = $ltp->getResultat(0,0);
        echo $res00.'<br>';
        echo ' var_dump($ltp->getResultat(0,1));';
        $res01 = $ltp->getResultat(0,1);
        echo $res01.'<br>';
        echo ' var_dump($ltp->getResultat(1,0));';
        $res10 = $ltp->getResultat(1,0);
        echo $res10.'<br>';
        echo ' var_dump($ltp->getResultat(1,1));';
        $res11 = $ltp->getResultat(1,1);
        echo $res11.'<br>'; */
        
        echo $ltp->getDeterminant();
        
        
        
        ?>
    </body>
</html>
