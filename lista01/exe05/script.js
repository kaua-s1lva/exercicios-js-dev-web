var salario = Number(prompt("Digite o valor do salário"))
var percentual;

if (salario <= 280) percentual = 0.2
if (salario > 280 && salario <= 700) percentual = 0.15
if (salario > 700 && salario <= 1500) percentual = 0.1
if (salario > 1500) percentual = 0.05

var descricao = `
    <p>Salário antes do reajuste: ${salario} </p>
    <p>Percentual de aumento aplicado: ${percentual * 100}% </p>
    <p>Valor do aumento: ${salario * percentual} </p>
    <p>Novo salário: ${salario * (1 + percentual)} </p>
`

document.write(descricao)