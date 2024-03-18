<?php
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['SERVER_PORT'];
// echo "<br>";


echo "<br>";
date_default_timezone_set("Asia/Amman");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "Today is " . date("H") . "<br>";
echo "Today is " . date("h") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>";
echo date("Y-m-d H:i:s");
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";

// --------------------------------------------------------------------------
// function basicOp($op, $val1, $val2)
// {
//   // Solution
//   switch ($op) {
//     case '+':
//         return $val1 + $val2;
//         break;

//     case '-':
//         return $val1 - $val2;
//         break;

//     case '*':
//         return $val1 * $val2;
//         break;

//     case '/':
//         return $val1 / $val2;
//         break;
//   }
// }
// echo basicOp('+',4,7);
// // ('+', 4, 7) --> 11
// // ('-', 15, 18) --> -3
// // ('*', 5, 5) --> 25
// // ('/', 49, 7) --> 7

// --------------------------------------------------------------------------
// $f = [4, 3, 9, 7, 2, 1];
// function squareOrSquareRoot($array)
// {
//     foreach ($array as $ee) {
//         if (ceil(sqrt($ee)) ** 2 == $ee) {
//             $ss[] = (int)sqrt($ee);
//         } else {
//             $ss[] = (int)pow($ee, 2);
//         }
//     }
//     return $ss;
// }

// print_r(squareOrSquareRoot($f));
// // [4,3,9,7,2,1] -> [2,9,3,49,4,1]

// --------------------------------------------------------------------------
// echo "<br><br>";

// function countBy($x, $n)
// {
//     $z = [];

//     for ($i = 1; $i <= $n; $i++) {
//         array_push($z, $i * $x);
//     }
//     return $z;
// }

// print_r(countBy(1, 10));
// echo '<br>';
// print_r(countBy(2, 5));
// echo '<br>';
// print_r(countBy(50, 5));
// // countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]
// // countBy(2,5) // should return [2,4,6,8,10]
// //  50,5 => 50, 100, 150, 200, 250

// --------------------------------------------------------------------------
// echo "<br><br>";

// function no_space(string $s): string
// {
//     // Your code here
//     $no = str_replace(' ', '', $s);
//     return $no;
// };

// print_r(no_space("8 j 8   mBliB8g  imjB8B8  jl  B"));
// // "8 j 8   mBliB8g  imjB8B8  jl  B" -> "8j8mBliB8gimjB8B8jlB"
// // "8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd" -> "88Bifk8hB8BB8BBBB888chl8BhBfd"
// // "8aaaaa dddd r     " -> "8aaaaaddddr"

// --------------------------------------------------------------------------
// echo "<br>";
function timeCorrect($timestring)
{
    if ($timestring == null || $timestring == "") {
        return $timestring;
    }
    $r = str_split($timestring, 3);
    $f = str_replace(":", "", $r);
    $t = explode(":", $timestring);
    if (
        count($t) !== 3 || !preg_match('/^\d+$/', $f[0]) || !preg_match('/^\d+$/', $f[1])
        || !preg_match('/^\d+$/', $f[2])  || strlen($f[0]) > 2
    ) {
        return null;
    } else {
        if ($f[2] > 59) {
            $f[1] += ((int)(($f[2]) / 60));
            ($f[2] - 60) < 10 ? $f[2] = "0" . ($f[2] - 60) : $f[2] = ($f[2] - 60);;
        }
        if ($f[1] > 59) {
            $f[0] += ((int)(($f[1]) / (60)));
            ($f[1] - 60) < 10 ? $f[1] = "0" . ($f[1] - 60) : $f[1] = ($f[1] - 60);
        }
        if ($f[0] > 23) {
            ($f[0] % 24) < 10 ? $f[0] = "0" . ($f[0] % 24) : $f[0] = ($f[0] % 24);
        }
        $e = array("$f[0]:", "$f[1]:", $f[2]);
        return  implode($e);
    }
};

print_r(timeCorrect("05:1c:22"));
echo "<br>";
print_r(timeCorrect("11:70:10"));
echo "<br>";
print_r(timeCorrect("19:99:99"));
echo "<br>";
print_r(timeCorrect("24:01:01"));
echo "<br>";
print_r(timeCorrect("28:01:01"));
echo "<br>";
print_r(timeCorrect("33:01:01"));
// echo timeCorrect(null);

// from 00:00:00 to 23:59:59.
// "09:10:01" -> "09:10:01"  
// "11:70:10" -> "12:10:10"  
// "19:99:99" -> "20:40:39"  
// "24:01:01" -> "00:01:01"  
// --------------------------------------------------------------------------
// echo "<br><br>";
// // function solution(string $s): int
// // {
// //     $f = str_split($s);
// //     $r = [];
// //     for ($i = 0; $i < count($f); $i++) {
// //         if ($f[$i] < $f[$i - 1]) {
// //             array_push($r, $f[$i]);
// //         }
// //     }
// //     return implode($r);
// // }

// function solution(string $s): int
// {
//     $max = 0;
//     for ($i = 0; $i < strlen($s) - 4; $i++) {
//         $current = (int)substr($s, $i, 5);
//         $max = max($max, $current);
//     }
//     return $max;
// }

// echo solution('7316717653133062491922511967442657474235534919493496983520368542506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753123457977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257540920752963450');
// echo "<br>";
// print_r(solution('1234567898765'));
// echo "<br>";
// print_r(solution("731674765"));

// //   $this->assertSame(99890, solution('7316717653133062491922511967442657474235534919493496983520368542506326239578318016984801869478851843858615607891129494954595017379583319528532088055111254069874715852386305071569329096329522744304355766896648950445244523161731856403098711121722383113622298934233803081353362766142828064444866452387493035890729629049156044077239071381051585930796086670172427121883998797908792274921901699720888093776657273330010533678812202354218097512545405947522435258490771167055601360483958644670632441572215539753123457977846174064955149290862569321978468622482839722413756570560574902614079729686524145351004748216637048440319989000889524345065854122758866688116427171479924442928230863465674813919123162824586178664583591245665294765456828489128831426076900422421902267105562632111110937054421750694165896040807198403850962455444362981230987879927244284909188845801561660979191338754992005240636899125607176060588611646710940507754100225698315520005593572972571636269561882670428252483600823257540920752963450'));
// //   $this->assertSame(98765, solution('1234567898765'));
// //   $this->assertSame(74765, solution("731674765"));

// --------------------------------------------------------------------------
// echo "<br><br>";
// $lst =  ["u", "6", "d", "1", "i", "w", "6", "s", "t", "4", "a", "6", "g", "1", "2", "w", "8", "o", "2", "0"];

// function mean(array $a)
// {
//     $int = [];
//     $str = [];
//     for ($i = 0; $i < count($a); $i++) {
//         if (is_numeric($a[$i])) {
//             array_push($int, $a[$i]);
//         } else {
//             array_push($str, $a[$i]);
//         }
//     }
//     $final = [array_sum($int) / count($int), implode($str)];
//     return $final;
// }

// print_r(mean($lst));

// // $this->assertEquals([3.6, "udiwstagwo"], mean($lst));


// --------------------------------------------------------------------------
// echo "<br><br>";

// function divisors($n)
// {
//     $c = 0;
//     for ($i = 1; $i < 500000; $i++) {
//         if ($n % $i == 0) {
//             $c++;
//         }
//     }
//     return $c;
// }

// echo divisors(30);
// 4 --> 3 // we have 3 divisors - 1, 2 and 4
// 5 --> 2 // we have 2 divisors - 1 and 5
// 12 --> 6 // we have 6 divisors - 1, 2, 3, 4, 6 and 12
// 30 --> 8 // we have 8 divisors - 1, 2, 3, 5, 6, 10, 15 and 30
// Random tests go up to n = 500000.

// // --------------------------------------------------------------------------
// echo "<br><br>";

// function remove(string $s): string
// {
//     $f = mb_split(" ", $s);
//     $c = [];
//     foreach ($f as $d) {
//         $no = substr_count($d, '!');
//         if ($no !== 1) {
//             $c[] = $d;
//         }
//     }
//     return implode(" ", $c);
// }


// var_dump(remove("Hi Hi! Hi!"));
// echo "<br>";
// var_dump(remove("Hi!"));
// echo "<br>";
// var_dump(remove("Hi! !Hi Hi!"));
// echo "<br>";
// var_dump(remove("Hi! Hi!! Hi!"));
// echo "<br>";
// var_dump(remove("Hi! !Hi! Hi!"));


// // remove("Hi Hi! Hi!") === "Hi"
// // remove("Hi!") === ""
// // remove("Hi! !Hi Hi!") === ""
// // remove("Hi! Hi!! Hi!") === "Hi!!"
// // remove("Hi! !Hi! Hi!") === "!Hi!"
// // remove("Hi! Hi!") === ""
// // remove("Hi! Hi! Hi!") === ""


// --------------------------------------------------------------------------
// echo "<br><br>";

// function remove(string $s): string
// {
//     $d = [];
//     $fin = [];
//     $f = str_split($s);
//     for ($i = 0; $i < count($f); $i++) {
//         if (preg_match('/!/', $f[$i])) {
//             array_push($d, $f[$i]);
//         } else {
//             array_push($fin, $f[$i]);
//         }
//     }
//     array_push($fin, implode($d));
//     return implode($fin);
// }
// // another solution::
// // function remove(string $s): string
// // {
//     //     return str_replace("!", "", $s, $c) . str_repeat('!', $c);
//     // }

//     print_r(remove("Hi! Hi!"));
//     echo "<br>";
//     print_r(remove("Hi! Hi! Hi!"));
//     echo "<br>";
//     print_r(remove("Hi! !!Hi Hi!"));

//     // "Hi! Hi!"      ---> "Hi Hi!!"
//     // "Hi! Hi! Hi!"  ---> "Hi Hi Hi!!!"
//     // "Hi! !Hi Hi!"  ---> "Hi Hi Hi!!!"
//     // "Hi!"          ---> "Hi!"
//     // "Hi! Hi!! Hi!" ---> "Hi Hi Hi!!!!"

// --------------------------------------------------------------------------
// echo "<br><br>";
// function getMiddle($text)
// {
//     $f = str_split($text);
//     if (count($f) % 2 != 0) {
//         return $f[count($f) / 2];
//     } else {
//         return $f[ceil(count($f) / 2) - 1] . $f[ceil(count($f) / 2)];
//     }
// }

// print_r(getMiddle("test")); //"es"
// echo "<br>";
// print_r(getMiddle("testing")); //'t'
// echo "<br>";
// print_r(getMiddle("middle")); //'dd'
// echo "<br>";
// print_r(getMiddle("A")); //'A'

// Kata.getMiddle("test") should return "es"
// Kata.getMiddle("testing") should return "t"
// Kata.getMiddle("middle") should return "dd"
// Kata.getMiddle("A") should return "A"

// --------------------------------------------------------------------------
// echo "<br><br>";


// class Dinglemouse
// {
//     private $firstName;
//     private $lastName;
//     public function __construct($firstName, $lastName)
//     {
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//     }
//     public function getFullName()
//     {
//         $fullName = trim("$this->firstName $this->lastName");
//         return $fullName;
//     }
// }
// echo (new Dinglemouse("Clint", "Eastwood"))->getFullName();


// --------------------------------------------------------------------------
echo "<br><br>";


// // this if can using sort:
// // function removeDuplicateWords($s)
// // {
// //     $f = explode(" ", $s);
// //     sort($f);
// //     for ($i = 0; $i < count($f) - 1; $i++) {
// //         if ($f[$i] === $f[$i + 1]) {
// //             continue;
// //         } {
// //             $g[] = $f[$i];
// //         }
// //     }
// //     $g[] = end($f);
// //     return implode(" ", $g);
// // }

// // this if you can't using sort:
// // function removeDuplicateWords($s)
// // {
// //     $f = explode(" ", $s);
// //     $g = [];
// //     for ($i = 0; $i < count($f); $i++) {
// //         $dup = false;
// //         for ($j = 0; $j < count($g); $j++) {
// //             if ($f[$i] == $g[$j]) {
// //                 $dup = true;
// //                 break;
// //             }
// //         }
// //         if (!$dup) {
// //             $g[] = $f[$i];
// //         }
// //     }
// //     return implode(" ", $g);
// // }

// // other solution:

// function removeDuplicateWords($s)
// {
//     $f = explode(" ", $s);
//     $g = array_unique($f);
//     return implode(" ", $g);
// }

// print_r(removeDuplicateWords('alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'));
// // Input:

// // 'alpha beta beta gamma gamma gamma delta alpha beta beta gamma gamma gamma delta'

// // Output:

// // 'alpha beta gamma delta'

// --------------------------------------------------------------------------

// function replaceAll($string)
// {
//     $f = explode('#', $string);
//     return $f[0];
// }

// print_r(replaceAll("www.codewars.com#about"));

// --------------------------------------------------------------------------

// function inverse_slice(array $items, int $a, int $b): array
// {
//     $f = array_slice($items, 0, $a);
//     $s = array_slice($items, $b);
//     return array_merge($f, $s);
// }


// print_r(inverse_slice([12, 14, 63, 72, 55, 24], 2, 4));   //[12, 14, 55, 24]
// echo '<br>';
// print_r(inverse_slice([12, 14, 63, 72, 55, 24], 0, 3));   //[72, 55, 24],


// --------------------------------------------------------------------------

// function squareUp($n)
// {
//     $h = [];
//     for ($i = 1; $i <= $n; $i++) {
//         for ($j = 1; $j <= $n; $j++) {
//             if ($j <= $n - $i) {
//                 array_push($h, 0);
//             } else {
//                 array_push($h, $n - $j + 1);
//             }
//         }
//     }
//     return $h;
// }


// print_r(squareUp(3)); // => [0, 0, 1, 0, 2, 1, 3, 2, 1]
// echo '<br>';
// print_r(squareUp(2)); // => [0, 1, 2, 1]
// echo '<br>';
// print_r(squareUp(4));// => [0, 0, 0, 1, 0, 0, 2, 1, 0, 3, 2, 1, 4, 3, 2, 1]


// --------------------------------------------------------------------------

// function word_value(array $a)
// {
//     $h = [];
//     $alph = range('a', 'z');
//     foreach ($a as $index => $word) {
//         $value = 0;
//         $chars = str_split($word);
//         foreach ($chars as $char) {
//             if ($char !== " ") {
//                 $charValue = array_search($char, $alph) + 1;
//                 if ($charValue !== false) {
//                     $value += $charValue;
//                 }
//             }
//         }
//         $h[] = $value * ($index + 1);
//     }
//     return $h;
// }

// print_r(word_value(["codewars"])); // => [88]
// echo "<br>";
// print_r(word_value(["codewars", "abc", "xyz"])); // => [88, 12, 225]
// echo "<br>";
// print_r(word_value(["abc abc", "abc abc", "abc", "abc"]));// => [12, 24, 18, 24]

/* nameValue ["abc","abc abc"] should return [6,24] because of [ 6 * 1, 12 * 2 ].
Note how spaces are ignored.
"abc" has a value of 6, while "abc abc" has a value of 12.
Now, the value at position 1 is multiplied by 1 while the value at position 2 is multiplied by 2. */

// --------------------------------------------------------------------------

// function minSum($arr)
// {
//     $a = 0;
//     sort($arr);
//     $co = count($arr);
//     for ($i = 0; $i < $co / 2; $i++) {
//         $a += ($arr[$i] * $arr[$co - $i - 1]);
//     }
//     return $a;
// }

// print_r(minSum([5, 4, 2, 3])); // ==> return (22)   [2,3,4,5]          5*2 + 3*4 = 22
// echo '<br>';
// print_r(minSum([12, 6, 10, 26, 3, 24]));// ==> return (342)   26*3 + 24*6 + 12*10 = 342

// --------------------------------------------------------------------------

// // function flatten_and_sort($array)
// // {
// //     $arr = [];
// //     foreach ($array as $f) {
// //         sort($f);
// //         $arr = array_merge($arr, $f);
// //     }
// //     sort($arr);
// //     return ($arr);
// // }

// // or 

// function flatten_and_sort($array)
// {
//     $arr = array_merge([], ...$array);
//     sort($arr);
//     return ($arr);
// }

// print_r(flatten_and_sort([[3, 2, 1], [7, 9, 8], [6, 4, 5]])); // ==> return [1, 2, 3, 4, 5, 6, 7, 8, 9]
// echo '<br>';
// print_r(flatten_and_sort([[1, 3, 5], [100], [2, 4, 6]]));// ==> return [1, 2, 3, 4, 5, 6, 100]

// --------------------------------------------------------------------------
// function arr_check(array $a)
// {
//     $f = false;
//     foreach ($a as $element) {
//         if (is_array($element)) {
//             $f = true;
//         } else {
//             $f = false;
//             break;
//         }
//     }
//     return $f;
// }


// print_r(arr_check([[1], [2]])); //=> true
// echo '<br>';
// print_r(arr_check(["1", "2"])); //=> false
// echo '<br>';
// print_r(arr_check([
//     new class
//     {
//         public $one = 1;
//     },
//     new class
//     {
//         public $two = 2;
//     }
// ])); //=> false

// --------------------------------------------------------------------------
function avgArray($arr)
{
    $averages = array_map('array_sum', array_map(null, ...$arr));
    return array_map(fn ($x) => $x / count($arr), $averages);
}


print_r(avgArray([[1, 2, 3, 4], [5, 6, 7, 8]])); // ==>  [3, 4, 5, 6]

// 1st array: [1, 2, 3, 4]
// 2nd array: [5, 6, 7, 8]
//             |  |  |  |
//             v  v  v  v
// average:   [3, 4, 5, 6]