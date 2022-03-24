
//Labels Header
const head1 = document.querySelector(".head1")
const head2 = document.querySelector(".head2")
const head3 = document.querySelector(".head3")
const head4 = document.querySelector(".head4")
const head5 = document.querySelector(".head5")


$(document).ready(function(){
    // vejo em qual programa (html) estou para deixar em negrito o menu    
    if((window.location.pathname.split("/").pop()) === 'Index.html'){
        head1.style.fontWeight = "bold"
    }
    else if((window.location.pathname.split("/").pop()) === 'Empresa.html'){
        head1.style.fontWeight = "bold"
    }
    else if((window.location.pathname.split("/").pop()) === 'Servicos.html'){
        head1.style.fontWeight = "bold"
    }
    else if((window.location.pathname.split("/").pop()) === 'Noticias.html'){
        head1.style.fontWeight = "bold"
    }
    else if((window.location.pathname.split("/").pop()) === 'Contato.html'){
        head1.style.fontWeight = "bold"
    }
})

