export function WhenOpenDetailsModal(){

    this.handle = (ev) => {
        const elementButton = ev.currentTarget
        const row = elementButton.closest("tr");
       
        const taskTitle = row.querySelector("[data-ref='titulo']")
        const {taskId} = row.querySelector("[data-task-id]").dataset
        const detailsModel = document.querySelector("#details-modal")
        const spanTaskTitle = detailsModel.querySelector("span[data-details-ref='titulo']")
        spanTaskTitle.innerHTML = taskTitle.innerHTML;

        let tasks = JSON.parse(localStorage.getItem("tasks")) ;
        tasks = Array.isArray(tasks) ? tasks : [] ;

        const currentTask = tasks.filter((task) => task.id == taskId);
        
        Object.entries(currentTask[0]).forEach(([label, value]) => {
            const input = document.querySelector(`#details-modal #${label}`);

            if(input) input.innerText = value; 
        })
        
    }
}