<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 02</h1>

    <?php
        
    
        function fibonacci($n) {
            $fib = array(0, 1);
            for ($i = 2; $i < $n; $i++) {
                $fib[$i] = $fib[$i-1] + $fib[$i-2];
            }
            sort($fib);
            return $fib;
        }
        
        $n = 5;
        $resultado = fibonacci($n);
        echo implode(', ', $resultado);
        

    ?>

</body>
</html>