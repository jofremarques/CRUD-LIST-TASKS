import { WhenOpenEditModal } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const whenOpenEditModal = new WhenOpenEditModal();
    const btnsEdit = document.querySelectorAll("[data-button-modal='edit-modal']")
    
    btnsEdit.forEach((btn)=> {
        btn.addEventListener("click", whenOpenEditModal.handle)
    })
})