import { WhenOpenDeleteModal } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const whenOpenDeleteModal = new WhenOpenDeleteModal();
    const btnsDelete = document.querySelectorAll("[data-button-modal='delete-modal']")
    
    btnsDelete.forEach((btn)=> {
        btn.addEventListener("click", whenOpenDeleteModal.handle)
    })
})