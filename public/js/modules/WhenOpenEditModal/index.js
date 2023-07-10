export function WhenOpenEditModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const {taskId} = row.querySelector("[data-task-id]").dataset

        const tasks =  localStorage.getItem("tasks");
        const currentTask = tasks.filter((task) => task.id == taskId);
        
        Object.entries(currentTask).forEach(([label, value]) => {
            document.querySelector(`#edit-modal #${label}]`).value = value; 
        })

        const btnTaskConfirm = document.querySelector("button[data-confirm-modal='edit']")
        btnTaskConfirm.setAttribute("data-task-current", taskId) 
    }
}