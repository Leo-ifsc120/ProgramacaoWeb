function TrocarCor(event)
{
    
    //desativar o evento de click do botão
    event.preventDefault();
    n = (Math.floor(Math.random() * 3))   
    switch(n)
    {

        case 0:
            this.style.color = "red";
            break;
        case 1:
            this.style.color = "blue";
            break;
        case 2:
            this.style.color = "yellow";
            break;
        case 3:
            this.style.color = "black";

    }

}

let n

let objButton = document.getElementById('button');
objButton.addEventListener("click", TrocarCor);
objButton.addEventListener("onkeydown", TrocarCor)


