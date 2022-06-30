function printDiv(divName) {
    
    
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    style_element();
    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
function style_element(){
    var name =   document.getElementById("name").style.listStylePosition = "";
}
function download() {
    let download = document.getElementById('printableArea');
    download.style.display = 'flex';
    let downloa = document.getElementById('butt');
    downloa.style.display = 'flex';
    let downla = document.getElementById('but');
    downla.style.display = 'flex';
};
document.querySelector('#but').addEventListener('click', function () {
    let cross = document.querySelector('#printableArea');
    let cros = document.querySelector('#butt');
    let cro = document.querySelector('#but');
    cross.style.display = 'none';
    cros.style.display = 'none';
    cro.style.display = 'none';
});




// 2. What will be the output of the following Python code?

// print("Hello {0!r} and {0!s}".format('foo', 'bin'))
// a) Hello foo and foo
// b) Hello ‘foo’ and foo
// c) Hello foo and ‘bin’
// d) Error
// View Answer

// Answer: b
// Explanation: !r causes the characters ‘ or ” to be printed as well.
// 3. What will be the output of the following Python code?

// print("Hello {0} and {1}".format(('foo', 'bin')))
// a) Hello foo and bin
// b) Hello (‘foo’, ‘bin’) and (‘foo’, ‘bin’)
// c) Error
// d) None of the mentioned
// View Answer

// Answer: c
// Explanation: IndexError, the tuple index is out of range.
// 4. What will be the output of the following Python code?

// print("Hello {0[0]} and {0[1]}".format(('foo', 'bin')))
// a) Hello foo and bin
// b) Hello (‘foo’, ‘bin’) and (‘foo’, ‘bin’)
// c) Error
// d) None of the mentioned
// View Answer

// Answer: a
// Explanation: The elements of the tuple are accessed by their indices.
// 5. What will be the output of the following Python code snippet?

// print('The sum of {0} and {1} is {2}'.format(2, 10, 12))
// a) The sum of 2 and 10 is 12
// b) Error
// c) The sum of 0 and 1 is 2
// d) None of the mentioned
// View Answer

// Answer: a
// Explanation: The arguments passed to the function format can be integers also.
// 6. What will be the output of the following Python code snippet?

// print('The sum of {0:b} and {1:x} is {2:o}'.format(2, 10, 12))
// a) The sum of 2 and 10 is 12
// b) The sum of 10 and a is 14
// c) The sum of 10 and a is c
// d) Error
// View Answer

// Answer: b
// Explanation: 2 is converted to binary, 10 to hexadecimal and 12 to octal.
// 7. What will be the output of the following Python code snippet?

// print('{:,}'.format(1112223334))
// a) 1,112,223,334
// b) 111,222,333,4
// c) 1112223334
// d) Error
// View Answer

// Answer: a
// Explanation: A comma is added after every third digit from the right.
// 8. What will be the output of the following Python code snippet?

// print('{:,}'.format('1112223334'))
// a) 1,112,223,334
// b) 111,222,333,4
// c) 1112223334
// d) Error
// View Answer

// Answer: d
// Explanation: An integer is expected.
// 9. What will be the output of the following Python code snippet?

// print('{:$}'.format(1112223334))
// a) 1,112,223,334
// b) 111,222,333,4
// c) 1112223334
// d) Error
// View Answer

// Answer: d
// Explanation: $ is an invalid format code.
// 10. What will be the output of the following Python code snippet?

// print('{:#}'.format(1112223334))
// a) 1,112,223,334
// b) 111,222,333,4
// c) 1112223334
// d) Error
// View Answer

// Answer: c