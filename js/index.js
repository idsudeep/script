

  /*
function fun() {


    console.log('message when click');
    document.getElementsByTagName("h1")[0].innerHTML = 'invalid password';
    setTimeout(() => {
      document.getElementsByTagName("h1")[0].innerHTML = ' ';
    }, 6000);

  }

  function fun1() {
    document.getElementById('f2').style.background = "Blue";
    setTimeout(() => {
      document.getElementById('f2').style.background = "purple";
    }, 1000);

  }*/
  /*
  1) While 
  syntax :
  initialization;
  while(condition){
  statement ;

  increment/decrement;
  }
  */
  var n = 15;
  var i = 0;
  while (i < n) {
    console.log('This loop repeat 5 times');
    i++;
  }

  /*
  do While : first statement is executed then check the condition.
          syntax:
                  initialization;
                  do{
                  statement ;
                  }while(condition);
  */

  var n = 5,
    i = 0;
  do {
    console.log('This loop repeat 5 times');
    i++;
  } while (i < n);

  /*
   for : inline loop
   syntax : for(initialization ; condition ; increment/decrement){
   statment ;
   }
  */
  for (var i = 0; i < 5; i++) {
    console.log("This loop repeat 5 times");
  }

  /*
   foreach 
   syntax:

   array.forEach(callback(element, index, arr), thisValue);

  */
  var arr = ['chandra', 'chandrika', 'Bidya', 'prakash'];

  arr.forEach(function(i) {

    console.log("Name : " + i);
  });
