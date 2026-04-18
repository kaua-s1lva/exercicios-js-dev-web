var usuarios = [];

function inserirUsuario() {
    var nome = document.getElementById("nome").value
    var email = document.getElementById("email").value

    var usuario = [nome, email]

    usuarios.push(usuario)

    document.getElementById("nome").value = ""
    document.getElementById("email").value = ""
}

function ListarUsuarios() {
    //melhoria: criar filhos p, ao invés de string
    var div_usuarios = document.getElementById("usuarios")

    while (div_usuarios.firstChild) {
        div_usuarios.removeChild(div_usuarios.firstChild)
    }

    var titulo = document.createElement("h1")
    var txt_titulo = document.createTextNode("Lista de Usuários")
    titulo.appendChild(txt_titulo)
    div_usuarios.appendChild(titulo)

    var grp_usuarios = usuarios.map(function(e) {
        var paragrafo = document.createElement("p")
        var txt = document.createTextNode(e[0] + ", " + e[1])
        paragrafo.appendChild(txt)
        return paragrafo
    })

    grp_usuarios.forEach(e => {
        div_usuarios.appendChild(e)
    });

}