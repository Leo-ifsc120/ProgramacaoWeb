function calcularMedia()
{    
    let objnome = document.getElementById("nome")
    let objnota1 = document.getElementById("nota1");
    let objnota2 = document.getElementById("nota2");
    let objnota3 = document.getElementById("nota3");
    
    let nome = objnome.value;
    let nota1 = objnota1.value;
    let nota2 = objnota2.value;
    let nota3 = objnota3.value;

    nota1 = parseFloat(nota1);
    nota2 = parseFloat(nota2);
    nota3 = parseFloat(nota3);

    let media = (nota1 + nota2 + nota3) / 3;
    media = media.toFixed(1)

    let condicao;

    if(media >= 6)
    {
        condicao = "Aprovado";
    }
    else
    {
        condicao = "reprovado";
    }

    let objDiv = document.getElementById("conteiner");
    objDiv.innerHTML = "O aluno: " + nome + "<br>A media do aluno é: " + media + "<br>A condição do aluno é: " + condicao;
    objDiv.setAttribute("class", "mostra")

}


let objButton = document.getElementById("Button");
objButton.addEventListener("click", calcularMedia);
