import { CreateTask } from "./index.js"

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("[data-form='add-task']")
    const confirmBtn = form.querySelectorAll("[data-add-task='add-task']")

    if(!confirmBtn || !form) return;
    form.addEventListener('submit', new CreateTask().handle);

    confirmBtn.forEach((btn)=>{
        btn.addEventListener('click', new CreateTask().handle)
    })
})