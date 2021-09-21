

let comprarfim = 0
let numex = [];

if (comprarfim == 0) {

    function clicar(clicked_id) {

        let numbert = document.getElementById(clicked_id)


        if (numex.indexOf(numbert.innerText) === -1) {
            numbert.style.background = 'red'
            numex.push(clicked_id);
        } else {
            numbert.style.background = 'rgb(10, 248, 10)'
            let posi = numex.indexOf(clicked_id);
            numex.splice(posi,1)
        }


        

        let quantescolha = document.querySelector('.confirmarnumeroquantidade')

        quantescolha.innerText = "Números escolhidos:" + numex

        let valorfinal = document.querySelector('.confirmarnumerovalorfinal')
        
        valorfinal.innerText = "Valor final: " + (numex.length * 20) + ("$")
    }

    function fim() {
        comprarfim = 1;
    }
}