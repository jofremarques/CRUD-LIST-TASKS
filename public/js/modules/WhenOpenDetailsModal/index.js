export function WhenOpenDetailsModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const taskTitle = row.querySelector("[data-ref='titulo']")
        const {taskId} = row.querySelector("[data-task-id]").dataset
        const detailsModel = document.querySelector("#details-modal")
        const spanTaskTitle = detailsModel.querySelector("span[data-details-ref='titulo']")
        spanTaskTitle.innerHTML = taskTitle.innerHTML
        
    }
}