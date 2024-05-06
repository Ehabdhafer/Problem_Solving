function invert(array) {
  let e = array.map(function (acc) {
    return -acc;
  });
  return e;
}

// console.log(invert([1, 2, 3, 4, 5]));
// invert([1,2,3,4,5]) == [-1,-2,-3,-4,-5]
// invert([1,-2,3,-4,5]) == [-1,2,-3,4,-5]
// invert([]) == []

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5a71939d373c2e634200008e/train/javascript
function solve(str) {
  const arr = [...str.split(` `).join(``)];
  return str.replace(/\S/g, (a) => arr.pop());
}
// console.log(solve("i love codewars"));
//("codewars"),"srawedoc");
//("your code"),"edoc ruoy");
//("your code rocks"),"skco redo cruoy");
//("i love codewars"),"s rawe docevoli");

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/57eeb8cc5f79f6465a0015c1/train/javascript
function isKiss(words) {
  let f = words.split(" ");
  let a = [];
  for (i = 0; i < f.length; i++) {
    a.push(f[i].length);
  }
  for (j = 0; j < a.length; j++) {
    if (a[j] < a.length) {
      continue;
    } else {
      return "Keep It Simple Stupid";
    }
  }
  return "Good work Joe!";
}

// console.log(isKiss("Joe had a bad day"));
// console.log(isKiss("Joe is having no fun"));
// console.log(isKiss("Sometimes joe cries for hours"));
// console.log(isKiss("Joe had some bad days"));

// describe('word count: 5', () => {
//   Test.assertEquals(isKiss('Joe had a bad day'), "Good work Joe!")
//   Test.assertEquals(isKiss('Joe had some bad days'), "Good work Joe!")
//   Test.assertEquals(isKiss('Joe is having no fun'), "Keep It Simple Stupid")
//   Test.assertEquals(isKiss('Sometimes joe cries for hours'), "Keep It Simple Stupid")
// });

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/57d2807295497e652b000139/train/javascript

function averages(numbers) {
  let arr = [];
  if (numbers == null) {
    return [];
  }
  for (i = 0; i < numbers.length - 1; i++) {
    if (numbers[i] == null || numbers[i + 1] == null) {
      return [];
    } else {
      arr.push((numbers[i] + numbers[i + 1]) / 2);
    }
  }
  return arr;
}

// console.log(averages([1, 3, 5, 1, -10]));
// Input:  [ 1, 3, 5, 1, -10]
// Output:  [ 2, 4, 3, -4.5]
// ([2, 2, 2, 2, 2]), [2, 2, 2, 2]);

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/566fc12495810954b1000030/train/javascript

function nbDig(n, d) {
  let res = 0;
  for (g = 0; g <= n; g++) {
    let square = (g * g + "").split("");
    square.forEach((s) => (s == d ? res++ : null));
  }
  return res;
}

// console.log(nbDig(10, 1));
// console.log(nbDig(25, 1));

// Take an integer n (n >= 0) and a digit d (0 <= d <= 9) as an integer.
// Square all numbers k (0 <= k <= n) between 0 and n.
// Count the numbers of digits d used in the writing of all the k**2.
// Implement the function taking n and d as parameters and returning this count.

// n = 10, d = 1
// the k*k are 0, 1, 4, 9, 16, 25, 36, 49, 64, 81, 100
// We are using the digit 1 in: 1, 16, 81, 100. The total count is then 4.

// The function, when given n = 25 and d = 1 as argument, should return 11 since
// the k*k that contain the digit 1 are:
// 1, 16, 81, 100, 121, 144, 169, 196, 361, 441.
// So there are 11 digits 1 for the squares of numbers between 0 and 25.

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/57faefc42b531482d5000123/train/javascript

function remove(string) {
  let result = string.replace(/!+/g, (match, offset, str) => {
    return offset === str.length - match.length ? match : "";
  });
  return result;
}

// console.log(remove("Hi! Hi!"));
// console.log(remove("Hi!!!"));

// "Hi! Hi!" ---> "Hi Hi!"
// "Hi!!!"   ---> "Hi!!!"
// "Hi!"     ---> "Hi!"
// "!Hi"     ---> "Hi"
// "!Hi!"    ---> "Hi!"
// "Hi"      ---> "Hi"

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/57a06005cf1fa5fbd5000216/train/javascript

function wordsToSentence(words) {
  return words.join(" ");
}

// console.log(wordsToSentence(["hello", "world"]));

// ["hello", "world"] -> "hello world"

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5933af2db328fbc731000010/train/javascript

function scf(array) {
  if (array.length === 0) {
    return 1;
  }
  for (j = 2; j < 10000; j++) {
    let f = true;

    for (i = 0; i < array.length; i++) {
      if (array[i] % j != 0) {
        f = false;
        break;
      }
    }
    if (f) {
      return j;
    }
  }
  return 1;
}

// console.log(scf([200, 30, 18, 8, 64, 34]));
// console.log(scf([21, 45, 51, 27, 33]));
// console.log(scf([133, 147, 427, 266]));
// console.log(scf([3, 5, 7]));
// console.log(scf([]));

// scf([200, 30, 18, 8, 64, 34]) //=> 2
// scf([21, 45, 51, 27, 33]) //=> 3
// scf([133, 147, 427, 266]) //=> 7

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/57faf32df815ebd49e000117/train/javascript

// function remove(string) {
//   let result = string.replace(/!+/g, (match, offset, str) => {
//     return offset === str.length - match.length ? match : "";
//   });
//   return result;
// }
function remove(string) {
  let result = string.replace(/\b!+/g, "");
  return result;
}

// console.log(remove("Hi!")); //=== "Hi"
// console.log(remove("Hi!!!")); //=== "Hi"
// console.log(remove("!Hi")); //=== "!Hi"
// console.log(remove("!Hi!")); //=== "!Hi"
// console.log(remove("Hi! Hi!")); //=== "Hi Hi"
// console.log(remove("!!!Hi !!hi!!! !hi")); //=== "!!!Hi !!hi !hi"

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/545a4c5a61aa4c6916000755/train/javascript

function gimme(triplet) {
  const sorted = [...triplet].sort((a, b) => a - b);
  return triplet.indexOf(sorted[1]);
}

// console.log(gimme([2, 3, 1])); //=> 0
// console.log(gimme([5, 10, 14])); //=> 1

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/586e1d458cb711f0a800033b/train/javascript

function processData(data) {
  let f = [];
  let h = 1;
  for (let i = 0; i < data.length; i++) {
    f.push(data[i][0] - data[i][1]);
  }
  for (let j = 0; j < f.length; j++) {
    h *= f[j];
  }
  return h;
}

// console.log(
//   processData([
//     [2, 5],
//     [3, 4],
//     [8, 7],
//   ])
// );

// data = [[2, 5], [3, 4], [8, 7]]
// Each sub-list contains two items, and each item in the sub-lists is an integer.

// Write a function process_data()/processData() that processes each sub-list like so:

// [2, 5] --> 2 - 5 --> -3
// [3, 4] --> 3 - 4 --> -1
// [8, 7] --> 8 - 7 --> 1
// and then returns the product of all the processed sub-lists: -3 * -1 * 1 --> 3.

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5a905c2157c562994900009d/train/javascript

function productArray(numbers) {
  let f = [];
  let h = 1;
  for (i = 0; i < numbers.length; i++) {
    for (j = 0; j < numbers.length; j++) {
      if (j !== i) {
        h *= numbers[j];
      }
    }
    f.push(h);
    h = 1;
  }
  return f;
}

// console.log(productArray([10, 3, 5, 6, 2])); // return ==> {180,600,360,300,900});

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5a63948acadebff56f000018/train/javascript

function maxProduct(numbers, size) {
  let f = [];
  let g = 1;
  numbers.sort((a, b) => b - a);
  for (i = 0; i < size; i++) {
    f.push(numbers[i]);
  }
  for (j = 0; j < f.length; j++) {
    g *= f[j];
  }
  return g;
}

// console.log(maxProduct([4, 3, 5], 2)); //==>  return (20)  5 * 4 = 20 .
// console.log(maxProduct([8, 10, 9, 7], 3)); //==>  return (720)  8 * 9 * 10 = 720 .
// console.log(maxProduct([10, 8, 3, 2, 1, 4, 10], 5)); //==>  return (9600)  10 * 10 * 8 * 4 * 3 = 9600 .
// console.log(maxProduct([-4, -27, -15, -6, -1], 2)); //==>  return (4)   -4 * -1 = 4 .

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5783d8f3202c0e486c001d23/train/javascript

function toNumberArray(stringarray) {
  let f = [];
  stringarray.forEach((r) => {
    f.push(parseFloat(r));
  });
  return f;
}
// console.log(toNumberArray(["1", "2", "3"])); // to [1, 2, 3]

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/59f11118a5e129e591000134/train/javascript

function repeats(arr) {
  let sum = 0;
  arr.sort((a, b) => {
    return a - b;
  });
  for (i = 0; i < arr.length; i += 2) {
    if (arr[i] !== arr[i + 1]) {
      sum += arr[i];
      i--;
    }
  }
  return sum;
}

// console.log(repeats([9, 10, 19, 13, 19, 13])); //19
// console.log(repeats([5, 10, 19, 13, 10, 13])); //24
// console.log(repeats([16, 0, 11, 4, 8, 16, 0, 11])); //12

/*For example, repeats([4,5,7,5,4,8]) = 15 
because only the numbers 7 and 8 occur once, and their sum is 15. Every other number occurs twice.
Test.assertEquals(repeats([9, 10, 19, 13, 19, 13]),19);
Test.assertEquals(repeats([16, 0, 11, 4, 8, 16, 0, 11]),12);
Test.assertEquals(repeats([5, 17, 18, 11, 13, 18, 11, 13]),22);
Test.assertEquals(repeats([5, 10, 19, 13, 10, 13]),24);*/

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/59b710ed70a3b7dd8f000027/train/javascript

function isAllPossibilities(x) {
  x.sort((a, b) => a - b);
  for (let i = 0; i < x.length; i++) {
    if (x[i] !== i) {
      return false;
    }
  }
  return true;
}

// console.log(isAllPossibilities([1, 2, 0, 3])); //=> True
// // # Includes all numbers between 0 and a.length - 1 (4 - 1 = 3)

// console.log(isAllPossibilities([0, 1, 2, 2, 3])); // => False
// // # Doesn't include all numbers between 0 and a.length - 1 (5 - 1 = 4)

// console.log(isAllPossibilities([0])); //=> True
// // # Includes all numbers between 0 and a.length - 1 (1 - 1 = 0).

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5a005f4fba2a14897f000086/train/javascript

function sumItUp(numbersWithBases) {
  let sum = 0;
  for (let i = 0; i < numbersWithBases.length; i++) {
    let number = numbersWithBases[i][0];
    let base = numbersWithBases[i][1];
    sum += parseInt(number, base);
  }
  return sum;
}

// console.log(
//   sumItUp([
//     ["101", 16],
//     ["7640", 8],
//     ["1", 9],
//   ])
// ); // -> 4258
// console.log(
//   sumItUp([
//     ["101", 2],
//     ["10", 8],
//   ])
// ); //--> 13
// console.log(
//   sumItUp([
//     ["ABC", 16],
//     ["11", 2],
//   ])
// ); //--> 2751
// You get an array of numbers with their base as an input:
// The output should be the sum as an integer value with a base of 10, so according to the example this would be:

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/56abc5e63c91630882000057/train/javascript

function nextNumb(val) {
  let next = val + 1;
  next += next % 2 === 0 ? 1 : 0;
  const maxNum = 9999999999;
  while (next <= maxNum) {
    if (next % 3 === 0 && hasUniqueDigits(next)) {
      return next;
    }
    next += 2;
  }
  return "There is no possible number that fulfills those requirements";
}
function hasUniqueDigits(num) {
  const digits = String(num).split("");
  return new Set(digits).size === digits.length;
}

/*Make a function that receives a value, val and outputs the smallest higher number than the given value, 
and this number belong to a set of positive integers that have the following properties:
their digits occur only once - they are odd - they are multiple of three*/

// console.log(nextNumb(12)); // 15
// console.log(nextNumb(13)); // 15
// console.log(nextNumb(99)); // 105

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/5a431c0de1ce0ec33a00000c/train/javascript

function evenNumbers(array, number) {
  let f = [];
  for (i = 0; i < array.length; i++) {
    if (array[i] % 2 == 0) {
      f.push(array[i]);
    }
  }
  return f.slice(-number);
}

/*Given an array of numbers, return a new array of length number containing the last even numbers from the original array (in the same order). The original array will be not empty and will contain at least "number" even numbers.*/
// console.log(evenNumbers([1, 2, 3, 4, 5, 6, 7, 8, 9], 3)); //=> [4, 6, 8]
// console.log(evenNumbers([-22, 5, 3, 11, 26, -6, -7, -8, -9, -8, 26], 2)); //=> [-8, 26]
// console.log(evenNumbers([6, -25, 3, 7, 5, 5, 7, -3, 23], 1)); //=> [6]

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/51b62bf6a9c58071c600001b/train/javascript
// convert the number to a roman numeral

function solution(number) {
  let y = {
    M: 1000,
    CM: 900,
    D: 500,
    CD: 400,
    C: 100,
    XC: 90,
    L: 50,
    XL: 40,
    X: 10,
    IX: 9,
    V: 5,
    IV: 4,
    I: 1,
  };
  let str = "";
  for (var i of Object.keys(y)) {
    var q = Math.floor(number / y[i]);
    number -= q * y[i];
    str += i.repeat(q);
  }
  return str;
}

// console.log(solution(500));
// console.log(solution(1990));
// console.log(solution(2008));
// console.log(solution(1666));

// ----------------------------------------------------------------------------
// https://www.codewars.com/kata/554e4a2f232cdd87d9000038/train/javascript
// In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G"

function dnaStrand(dna) {
  let f = dna.split("");
  let arr = [];
  for (i = 0; i < f.length; i++) {
    switch (f[i]) {
      case "A":
        arr.push("T");
        break;
      case "T":
        arr.push("A");
        break;
      case "C":
        arr.push("G");
        break;
      case "G":
        arr.push("C");
        break;
      default:
        return "not defined";
        break;
    }
  }
  return arr.join("");
}

console.log(dnaStrand("AAAA")); // => TTTT
console.log(dnaStrand("ATTGC")); // => TAACG
console.log(dnaStrand("GTAT")); // => CATA
