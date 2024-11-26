let objButton = document.getElementById("Button");
let objdiv = document.getElementById("conteiner")

objButton.addEventListener("click", calculaTemperatura);


function calculaTemperatura(event)
{

    let temp = document.getElementById("temp").value;
    const radios = document.getElementsByName('type');
    let valorSelecionado;
  
    // Percorre os inputs para encontrar o que está selecionado
    for (let i = 0; i < radios.length; i++) 
    {
        if (radios[i].checked) 
        {
            valorSelecionado = radios[i].value;
            break;
        }
    }

            if(valorSelecionado == "F")
            {
                temp = (temp - 32) * 5/9;
            }
            if(valorSelecionado == "C")
            {
                temp = (temp * 9/5) + 32;
            }

            temp = temp.toFixed(1);
    objdiv.innerHTML = "Temperatura convertida: " + temp;


    event.preventDefault()
}