<?php
class SpeSkillTest {
    public static function narcissistic(int $number): bool {
        $numStr = (string)$number;
        $numDigits = strlen($numStr);
        $sum = 0;

        foreach(str_split($numStr) as $digit){
            $sum += pow(intval($digit, 10), $numDigits);
        }
        
        if($sum === $number){
            return true;
        }else{
            return false;
        }
    }

    public static function parity($integers) {
        $odds = array();
        $evens = array();

        foreach ($integers as $item) {
            if ($item % 2){
                array_push($odds, $item);
            }else{
                array_push($evens, $item);
            }
        }

        if(count((is_countable($evens)?$evens:[])) === 1){
            return $evens[0];
        }elseif(count((is_countable($odds)?$odds:[])) === 1) {
            return $odds[0];
        }else{
            return false;
        }
    }

    public static function findNeedle($haystack, $needle){
        foreach($haystack as $key => $val){
            if($val == $needle){
                return $key;
            }
        }

        return false;
    }

    public static function blueOcean($one,$two){
        $three = array_diff($one,$two);
        print_r($three);
    }
}

$spe_skill_test = new SpeSkillTest();

echo $spe_skill_test->narcissistic(153);
echo $spe_skill_test->parity([2, 4, 0, 100, 4, 11, 2602, 36]);
echo $spe_skill_test->findNeedle(['red', 'blue', 'yellow', 'black', 'grey'],'blue');
echo $spe_skill_test->blueOcean([1,2,3,4,6,10], [1]);
?>
