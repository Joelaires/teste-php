<!DOCTYPE html>
<html>
<body>

<h1>Caso de teste 05</h1>

    <?php

        $letterIndex = 0;
        $result = 0;
        echo contar("ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
        uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
        eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
        iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
        ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
        oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
        euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
        ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu");
        
        function contar($dado) {
            global $letterIndex, $result;
            $dado = str_split($dado);
            for ($i = 0; $i < count($dado); $i++) {
                $letter = indexLetter($letterIndex);
                if ($letter == $dado[$i]) {
                    $result++;
                } else if (indexLetter($letterIndex + 1) == $dado[$i]) {
                    $letterIndex++;
                    $result++;
                }
            }
            return $result;
        }

        function indexLetter($index) {
            $letter = "";
            switch ($index) {
                case 0:
                    $letter = "a";
                    break;
                case 1:
                    $letter = "e";
                    break;
                case 2:
                    $letter = "i";
                    break;
                case 3:
                    $letter = "o";
                    break;
                case 4:
                    $letter = "u";
                    break;
            }
            return $letter;
        }

?>

</body>
</html>