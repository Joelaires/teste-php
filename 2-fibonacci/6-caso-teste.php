<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 06</h1>

    <?php
        
    
        function fibonacci($n) {
            $fib = array(0,1);
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i-1] + $fib[$i-2];
            }
            sort($fib);
            return $fib;
        }
        
        $n = 10;
        $resultado = fibonacci($n);
        echo implode(', ', $resultado);
        

    ?>

</body>
</html>