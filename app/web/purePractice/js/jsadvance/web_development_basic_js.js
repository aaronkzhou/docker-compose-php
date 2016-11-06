function reverse_a_number(n)
{
	n = n + "";
	return n.split("").reverse().join('');
}
function check_Palindrome(str_entry){  

// Change the string into lower case and remove  all non-alphanumeric characters  
   var cstr = str_entry.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'');  
    var ccount = 0;  
// Check whether the string is empty or not  
    if(cstr==="") {  
        alert("Nothing found!");  
        return false;  
    }  
// Check if the length of the string is even or odd   
    if ((cstr.length) % 2 === 0) {  
        ccount = (cstr.length) / 2;  
    } else {  
// If the length of the string is 1 then it becomes a palindrome  
        if (cstr.length === 1) {  
            alert("Entry is a palindrome.");  
            return true;  
        } else {  
// If the length of the string is odd ignore middle character  
            ccount = (cstr.length - 1) / 2;  
        }  
    }  
// Loop through to check the first character to the last character and then move next  
    for (var x = 0; x < ccount; x++) {  
// Compare characters and drop them if they do not match   
        if (cstr[x] != cstr.slice(-1-x)[0]) {  
            alert("Entry is not a palindrome.");  
            return false;  
        }  
    }  
    alert("The entry is a palindrome.");  
    return true;  
}  
//Write a JavaScript function that accepts a string as a parameter and converts the first letter of each word of the string in upper case.  
  
function uppercase(str)  
{  
  var array1 = str.split(' ');  
  var newarray1 = [];  
      
  for(var x = 0; x < array1.length; x++){  
      newarray1.push(array1[x].charAt(0).toUpperCase()+array1[x].slice(1));  
  }  
  return newarray1.join(' ');  
}  
//Write a JavaScript function that accepts a string as a parameter and find the longest word within the string.
//Sample Data and output : b
//Example string : 'Web Development Tutorial' 
//Expected Output : 'Development'

function find_longest_word(str)  
{  
  var array1 = str.match(/\w[a-z]{0,}/gi);  
  var result = array1[0];  
  
  for(var x = 1 ; x < array1.length ; x++)  
  {  
    if(result.length < array1[x].length)  
    {  
    result = array1[x];  
    }   
  }  
  return result;  
}  
