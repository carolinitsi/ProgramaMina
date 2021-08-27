var chamamodal = document.querySelector('.bt_chama_modal');
chamamodal.addEventListener('click', function(){
        Modal('modal_fundo');
     });
var Fechamodal = document.querySelector('.fechar');
Fechamodal.addEventListener('click', function(){
        fechaModal('modal_fundo');
     });

function Modal(modalID){
        var modal = document.getElementById(modalID);
        modal.classList.add('mostrar');
    }   
function fechaModal(modalID){
        var modal = document.getElementById(modalID);
        modal.classList.remove('mostrar');
    }