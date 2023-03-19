const arr = [1, 2, 3, 4, 5];
let result = addNumbers(arr);
document.getElementById("result").innerHTML += " " + result;

let Max = findMaxNumber(1, 2, 3, 4, 5);
document.getElementById("MAX").innerHTML += " " + Max;


const mixed_arr = [4, 5, "3.0 birds", true, "birds2"];
let sum_mix = addOnlyNumbers(mixed_arr);
document.getElementById("mixed").innerHTML += " " + sum_mix;


let str1 = "hello123 world321";
let digits = getDigits(str1);
document.getElementById("digits").innerHTML += " " + digits;

let str2 = "See you later!";
let reversing = reverseString(str2);
document.getElementById("reverse").innerHTML += " " + reversing;

let currentDate = getCurrentDate();
document.getElementById("date").innerHTML += " " + currentDate;


//functions start here:
function addNumbers(numbers) {
    let sum = 0;
    for (let i = 0; i < numbers.length; i++) {
        sum += numbers[i];
    }
    return sum;
}

function findMaxNumber() {
    let numbers = Array.from(arguments)
    return Math.max(...numbers);
}

function addOnlyNumbers(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
        const num = parseFloat(arr[i]);
        if (!isNaN(num)) {
            sum += num;
        }
    }
    return sum;
}

function getDigits(str) {
    let digits = '';

    for (let i = 0; i < str.length; i++) {
        let char = str.charAt(i);

        if (/[0-9]/.test(char)) {
            digits += char;
        }
    }

    return digits;
}

function reverseString(str) {
    let reversed = '';
    
    for (let i = str.length - 1; i >= 0; i--) {
      reversed += str.charAt(i);
    }
    
    return reversed;
  }
  
  function getCurrentDate() {
    const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const monthsOfYear = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  
    let currentDate = new Date();
    let dayOfWeek = daysOfWeek[currentDate.getDay()];
    let monthOfYear = monthsOfYear[currentDate.getMonth()];
    let dayOfMonth = currentDate.getDate();
    let year = currentDate.getFullYear();
  
    const formattedDate = `${dayOfWeek}, ${monthOfYear} ${dayOfMonth}, ${year}`;
  
    return formattedDate;
  }
  

