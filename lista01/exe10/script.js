var quantidade_filmes = new Array(500).fill(0)

var qtd_filmes = quantidade_filmes.map((e) => parseInt(Math.random() * 50))

var filmes_premiados = qtd_filmes.map((e) => parseInt(e/10))

console.log(qtd_filmes)
console.log(filmes_premiados)