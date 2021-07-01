/*********** Boîtes personnalisées ************/
var modalContainer = document.createElement('div');
modalContainer.setAttribute('id', 'modal');

var customBox = document.createElement('div');
customBox.className = 'custom-box';

// Affichage boîte de confirmation
document.getElementById('custom-confirm-box-button').addEventListener('click',
function(){
    customBox.innerHTML = '<p> Êtes-vous sûr de vouloir supprimer cet enregistrement !</p>';
    customBox.innerHTML += '<button id="modal-confirm">Oui</button>';
    customBox.innerHTML += '<button id="modal-close">Non</button>';
    modalShow();
});

function modalShow(){
    modalContainer.appendChild(customBox);

    document.body.appendChild(modalContainer);

    document.getElementById('modal-close').addEventListener('click',
    function(){
        modalClose();
    });

    if(document.getElementById('modal-confirm')){
        document.getElementById('modal-confirm').addEventListener('click',
        function(){
            console.log('Confirmé !');
            onCLickDelete();
            modalClose();
        });
    }
    else if(document.getElementById('modal-submit')){
        document.getElementById('modal-submit').addEventListener('click',
        function(){
            console.log(document.getElementById('modal-prompt').value);
            modalClose();
        });
    }
}

function modalClose(){
    while(modalContainer.hasChildNodes()){
        modalContainer.removeChild(modalContainer.firstChild);
    }
    document.body.removeChild(modalContainer);
}