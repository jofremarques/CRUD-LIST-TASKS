import { WhenOpenDetailsModal } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const whenOpenDetailsModal = new WhenOpenDetailsModal();
    const btnsDetails = document.querySelectorAll("[data-button-modal='details-modal']")
    
    btnsDetails.forEach((btn)=> {
        btn.addEventListener("click", whenOpenDetailsModal.handle)
    })
})