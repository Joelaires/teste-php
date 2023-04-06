<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 02</h1>

    <?php
        //echo "Hello World!";
        $arr = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
        $sortedArr = sortByFrequency($arr);
        print_r($sortedArr);
        
        function sortByFrequency($arr) {
            $freq = array_count_values($arr);
            $tupleList = array();
            foreach ($freq as $element => $count) {
                $tupleList[] = array($element, $count);
            }

            usort($tupleList, function($a, $b) {
                if ($a[1] == $b[1]) {
                    return $a[0] - $b[0];
                }
                return $a[1] - $b[1];
            });
            
            $sortedArr = array();
            foreach ($tupleList as $tuple) {
                for ($i = 0; $i < $tuple[1]; $i++) {
                    $sortedArr[] = $tuple[0];
                }
            }
            
            return $sortedArr;
        }     

    ?>

</body>
</html>