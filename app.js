
var url =window.location.href;
var str1=url.split("=");
var str2=str1[1].split("%20");
var name = str2[0].concat(" ",str2[1]);

var sname = document.getElementById("sname");
sname.value=name;
var validamt=false;
function myValidation(e){

  var amt = document.forms["transeferForm"]["amt"].value;
   if(isNaN(amt)) {
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'It should be a number',
    })
    return validamt;

  }else{
      validamt=true;
    return validamt;
  }
}
if(window.history.replaceState){
    window.history.replaceState( null, null, window.location.href );
  }