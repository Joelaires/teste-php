<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 03</h1>

    <?php
        
    
        function fibonacci($n) {
            $fib = array(0, 1);
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i-1] + $fib[$i-2];
            }
            sort($fib);
            return $fib;
        }
        
        $n = 8;
        $resultado = fibonacci($n);
        echo implode(', ', $resultado);
        

    ?>

</body>
</html>