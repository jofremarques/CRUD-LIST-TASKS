import { UpdateTask } from "./index.js"

document.addEventListener("DOMContentLoaded", ()=> {
    const updateTask = new UpdateTask()
    const form = document.querySelector("[data-form='edit-task']")
    const btnEditConfirm = document.querySelector("[data-confirm-modal='edit']")

    if(!btnEditConfirm || !form) return;

    form.addEventListener('submit', updateTask.handle);
    btnEditConfirm.addEventListener("click", updateTask.handle)
})