import { WhenOpenDeleteModal } from "../WhenOpenDeleteModal/index.js";

export function handleModal(){
    const whenOpenDeleteModal = new WhenOpenDeleteModal();

    const btns = document.querySelectorAll('[data-button-modal]');
    const closeBtns = document.querySelectorAll('[data-close-modal]');
    const deleteBtns = document.querySelectorAll('[data-button-modal="delete-modal"]');

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

    deleteBtns.forEach(deleteBtns => {
        $(deleteBtns).click(whenOpenDeleteModal.handle);
    })
}
