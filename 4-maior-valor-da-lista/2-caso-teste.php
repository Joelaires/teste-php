<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 02</h1>

    <?php

            function executeOperations($operations) {

                $array = array_fill(1, 5, 0); 
            
                foreach ($operations as $op) {
                $a = $op[0];
                $b = $op[1];
                $v = $op[2];
                for ($i = $a; $i <= $b; $i++) {
                    $array[$i] += $v;
                }
                }

                $max = max($array);
            
                return $max;
            }
            
            $operations = array(
                array(2, 3, 603),
                array(1, 1, 286),
                array(4, 4, 882)
            );
            $result = executeOperations($operations);
            echo $result; 
  
    ?>

</body>
</html>