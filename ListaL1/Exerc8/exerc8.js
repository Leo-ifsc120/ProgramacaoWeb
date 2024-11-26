
let objParag1 = document.getElementById("Parag1")
let objParag2 = document.getElementById("Parag2")
let objLista = document.getElementById("Lista")

let textoDoParag1 = objParag1.innerHTML;
let textoDoParag2 = objParag2.innerHTML;

let textoFinal = "<li>" + textoDoParag1 + "</li><li>" + textoDoParag2 + "</li>";


objLista.innerHTML = textoFinal;