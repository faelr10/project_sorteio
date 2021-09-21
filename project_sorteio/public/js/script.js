

let comprarfim = 0
let numex = [];

if (comprarfim == 0) {

    function clicar(clicked_id) {

        let numbert = document.getElementById(clicked_id)

        numbert.style.background = 'red'

        numex.push(clicked_id);

        let quantescolha = document.querySelector('.confirmarnumeroquantidade')

        quantescolha.innerText = "Números escolhidos:" + numex

        let valorfinal = document.querySelector('.confirmarnumerovalorfinal')
        
        valorfinal.innerText = "Valor final: " + (numex.length * 20) + ("$")
    }

    function fim() {
        comprarfim = 1;
    }

}