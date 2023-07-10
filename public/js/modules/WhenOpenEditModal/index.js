export function WhenOpenEditModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const {taskId} = row.querySelector("[data-task-id]").dataset

        let tasks = JSON.parse(localStorage.getItem("tasks")) ;
        tasks = Array.isArray(tasks) ? tasks : [] ;

        const currentTask = tasks.filter((task) => task.id == taskId);
        
        Object.entries(currentTask[0]).forEach(([label, value]) => {
            const input = document.querySelector(`#edit-modal #${label}`);

            if(input) input.value = value; 
        })

        const btnTaskConfirm = document.querySelector("button[data-confirm-modal='edit']")
        btnTaskConfirm.setAttribute("data-task-current", taskId) 
    }
}