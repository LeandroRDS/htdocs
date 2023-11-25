
/*Script Botão Minha Conta */
var btn_minha_conta = window.document.querySelector('div#img-login')
btn_minha_conta.addEventListener('click', minhaConta)
var home_mobile = window.document.querySelector('main#id-main-home-mobile')
var menu_minha_conta = window.document.querySelector('div#id-div-minha-conta')

function minhaConta(){
    location.href = 'tela-minha-conta/tela-minha-conta.html'
}


/* Script Botão Fazer Login*/
var btn_fazer_login = window.document.querySelector('div#id-div-login')
btn_fazer_login.addEventListener('click', fazerLogin)
function fazerLogin(){
    location.href = 'tela_login/tela-fazer-login.html'
}



