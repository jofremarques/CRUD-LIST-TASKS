
export function handleModal(){

    let btns = document.querySelectorAll('[data-button-modal]');
    let closeBtns = document.querySelectorAll('[data-close-modal]');

    btns.forEach(btn => {   
        $(btn).click(function(e) {
            let refModal = btn.dataset.buttonModal;
            let modal = document.querySelector(`[data-modal=${refModal}]`);
            $(modal).fadeIn(500);
            $(modal).show();
        });    
    });

    closeBtns.forEach(closeBtn =>{
        $(closeBtn).click(function(e) {
            let refModal = closeBtn.dataset.closeModal;
            let modal = document.querySelector(`[data-modal=${refModal}]`);
            $(modal).hide();
        });
    })
}
