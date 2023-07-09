export function WhenOpenDeleteModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const taskTitle = row.querySelector("[data-ref='titulo']")
        const {taskId} = row.querySelector("[data-task-id]").dataset
        const deleteModel = document.querySelector("#delete-modal")

        const spanTaskTitle = deleteModel.querySelector("span[data-delete-ref='titulo']")
        spanTaskTitle.innerHTML = taskTitle.innerHTML
        
        const btnTaskConfirm = document.querySelector("button[data-confirm-modal='delete']")
        btnTaskConfirm.setAttribute("data-task-current", taskId) 
    }
}