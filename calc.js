let btncalc = document.getElementById("btncalc");
let scientificoption = document.getElementById("sci");
let inputs = document.querySelectorAll(".input");
const typecalc = document.querySelectorAll('input[name="typecalc"]');
btncalc.setAttribute('class','disable-button');


setInterval(() => {
  if(inputs[0].value!=="" && inputs[1].value!==""){
    btncalc.setAttribute('class','normal-button');
    btncalc.disabled=false;
  }else{
    btncalc.setAttribute('class','disable-button');
  }

  if(typecalc[0].checked){
    scientificoption.style.display = "none";
  }else if(typecalc[1].checked){
    scientificoption.style.display = "block";
  }

}, 200);


