import { invalidMessage } from "../../components/invalidMessage.js";
import { lineTask } from "../../components/lineTask.js";
import { handleModal } from "../modal/index.js";

export function LoadTask() {

    this.handle = () => {
        const table = document.querySelector('table tbody');

        $.ajax({
            url: "/api/task",
            method: 'GET',
            context: document.body 
          }).done(function(tasks = []) {
            if(!Array.isArray(tasks)) return;

            localStorage.setItem("tasks", tasks);
            tasks.forEach((task) => {
                table.appendChild(lineTask({
                    dateValue: task.entrega,
                    idValue: task.id,
                    priorityValue: task.prioridade,
                    statusValue: task.status,
                    titleValue: task.titulo
                }))
            })
           
            handleModal();
        });
    }
}