var vet_A = new Array(20)

for (let i=0; i<5; i++) {
    vet_A[i] = prompt("Digite o valor " + i + " : ")
}

var vet_b = vet_A.filter(function(e) {
    return e != null && e != '' && e >= 0
})

document.write("Vetor A: " + vet_A)
document.write("Vetor B: " + vet_b)