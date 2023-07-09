export function WhenOpenEditModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const taskTitle = row.querySelector("[data-ref='titulo']")
        const {taskId} = row.querySelector("[data-task-id]").dataset
        const editModel = document.querySelector("#edit-modal")

        const spanTaskTitle = editModel.querySelector("span[data-edit-ref='titulo']")
        spanTaskTitle.innerHTML = taskTitle.innerHTML
        
        const btnTaskConfirm = document.querySelector("button[data-confirm-modal='edit']")
        btnTaskConfirm.setAttribute("data-task-current", taskId) 
    }
}