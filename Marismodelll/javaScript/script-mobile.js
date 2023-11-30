
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

/* Script Botão ajuda*/
var btn_ajuda = window.document.querySelector('input#id-btn-ajuda')
btn_ajuda.addEventListener('click', chamarTelaAjuda)
function chamarTelaAjuda(){
    location.href = 'tela-ajuda/index.html'
}

/* Script Botão carrinho*/
var btn_carrinho = window.document.querySelector('img#id-img-carrinho')
btn_carrinho.addEventListener('click', camarTelaCarrinho)
function camarTelaCarrinho(){
    location.href = 'tela-carrinho/index.html'
}


