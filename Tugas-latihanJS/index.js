/*nama Kelompok:
Ida Bagus Gagananta Amartya (1808561087)
I Made Nusa Yudiskara (1808561090)
I Kadek Aldy Oka Ardita (1808571091)

/*1.
Description:
Write the function squareArea(A) (square_area($A) in PHP) that finds the area of the red square when you have the length of the circular arc A.

alt text

Use π = Math.PI (M_PI in PHP)
Round to two decimals.
*/

function squareArea(A){
  return Number(Math.pow(2 * A / 3.1416, 2).toFixed(2))

}


/*2.
Description:
Write function avg which calculates average of numbers in given list.
*/

function find_average(array) {
  return array.reduce((result, current) => result + current, 0) / array.length;
}

/*3.*/
function greet() {
   return "hello world!";
}


/*4.
Description:
The goal is to create a function 'numberToPower(number, power)' that "raises" the number up to power (ie multiplies number by itself power times).

Examples
numberToPower(3,2)  // -> 9 ( = 3 * 3 )
numberToPower(2,3)  // -> 8 ( = 2 * 2 * 2 )
numberToPower(10,6) // -> 1000000
Note: Math.pow and some others Math functions are disabled on final tests.
*/

function numberToPower(number, power) {
  let result = 1;
  for (let i = 1; i <= power; i++) {
    result *= number;
  }
  return result;
}



/*5.
Description:
Complete the function that takes a non-negative integer n as input, and returns a list of all the powers of 2 with the exponent ranging from 0 to n (inclusive).

Examples
n = 0  ==> [1]        # [2^0]
n = 1  ==> [1, 2]     # [2^0, 2^1]
n = 2  ==> [1, 2, 4]  # [2^0, 2^1, 2^2]
*/

function powersOfTwo(n) {
  return Array.from({length: n + 1}, (v, k) => 2 ** k);
}


/*6.
Description:
Kids drink toddy.
Teens drink coke.
Young adults drink beer.
Adults drink whisky.
Make a function that receive age, and return what they drink.

Rules:

Children under 14 old.
Teens under 18 old.
Young under 21 old.
Adults have 21 or more.
Examples:

peopleWithAgeDrink(13) === "drink toddy"
peopleWithAgeDrink(17) === "drink coke"
peopleWithAgeDrink(18) === "drink beer"
peopleWithAgeDrink(20) === "drink beer"
peopleWithAgeDrink(30) === "drink whisky"
*/

function peopleWithAgeDrink(old) {
  if (old>=21)return "drink whisky";
  if (old<14)return"drink toddy"
  if (old<18)return"drink coke"
  if (old<21)return"drink beer"
};


/*7.
Description:
There's a "3 for 2" (or "2+1" if you like) offer on mangoes. For a given quantity and price (per mango), calculate the total cost of the mangoes.

Examples
mango(3, 3) ==> 6    # 2 mangoes for 3 = 6; +1 mango for free
mango(9, 5) ==> 30   # 6 mangoes for 5 = 30; +3 mangoes for free
*/

function mango(quantity, price){
let q=Math.floor(quantity/3)
return (quantity-q)*price
}

/*8.
Description:
In this kata you will create a function that takes in a list and returns a list with the reverse order.

Examples
reverseList([1,2,3,4]) == [4,3,2,1]
reverseList([3,1,5,4]) == [4,5,1,3]
*/

function reverseList(list) {
  return list.reverse();
}


/* 9.
Description:
Sentence Smash
Write a method smash that takes an array of words and smashes them together into a sentence and returns the sentence. You can ignore any need to sanitize words or add punctuation, but you should add spaces between each word. Be careful, there shouldn't be a space at the beginning or the end of the sentence!

Example
var words = ['hello', 'world', 'this', 'is', 'great'];
smash(words); // returns "hello world this is great"
Assumptions
You can assume that you are only given words.
You cannot assume the size of the array.
You can assume that you will always get an array.
What We're Testing
We're testing basic loops and string manipulation. This is for beginners who are just learning loops and string manipulation.

Disclaimer
This is for beginners so we want to test basic loops and string manipulation. Advanced users should easily be able to do this in one line.
*/

// Smash Words
function smash(words) {
  "use strict";
  return words.join(" ");
}


/*10.
Description:
You can print your name on a billboard ad. Find out how much it will cost you. Each letter has a default price of £30, but that can be different if you are given 2 parameters instead of 1.

You can not use multiplier "*" operator.

If your name would be Jeong-Ho Aristotelis, ad would cost £600. 20 leters * 30 = 600 (Space counts as a letter).
*/

function billboard(name, price = 30){
let q=0;
for (let i=1;i<=name.length;i++) {q+=price}
return q
} 
