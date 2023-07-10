import { WhenOpenDeleteModal } from "../WhenOpenDeleteModal/index.js";
import { WhenOpenDetailsModal } from "../WhenOpenDetailsModal/index.js";
import { WhenOpenEditModal } from "../WhenOpenEditModal/index.js";

export function handleModal(){
    const whenOpenDeleteModal = new WhenOpenDeleteModal();
    const whenOpenDetailsModal = new WhenOpenDetailsModal();
    const whenOpenEditModal = new WhenOpenEditModal()

    const btns = document.querySelectorAll('[data-button-modal]');
    const closeBtns = document.querySelectorAll('[data-close-modal]');
    const deleteBtns = document.querySelectorAll('[data-button-modal="delete-modal"]');
    const editBtns = document.querySelectorAll('[data-button-modal="edit-modal"]');
    const detailsBtns = document.querySelectorAll('[data-button-modal="details-modal"]');

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

    deleteBtns.forEach(deleteBtn => {
        $(deleteBtn).click(whenOpenDeleteModal.handle);
    })

    editBtns.forEach(editBtn => {
        $(editBtn).click(whenOpenEditModal.handle);
    })

    detailsBtns.forEach(detailsBtn => {
        $(detailsBtn).click(whenOpenDetailsModal.handle);
    })
}
