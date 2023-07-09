import { DeleteTask } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const deleteTask = new DeleteTask()
    const btnDeleteConfirm = document.querySelector("[data-confirm-modal='delete']")

    btnDeleteConfirm.addEventListener("click", deleteTask.handle)
})