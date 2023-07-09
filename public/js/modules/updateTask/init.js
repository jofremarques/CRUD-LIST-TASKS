import { UpdateTask } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const updateTask = new UpdateTask()
    const btnEditConfirm = document.querySelector("[data-confirm-modal='edit']")

    btnEditConfirm.addEventListener("click", updateTask.handle)
})