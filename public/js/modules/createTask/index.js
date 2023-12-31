import { invalidMessage } from "../../components/invalidMessage.js";
import { lineTask } from "../../components/lineTask.js";
import { handleModal } from "../modal/index.js";

export function CreateTask() {

    this.handle = (ev) => {
        ev.preventDefault();

        const element = ev.currentTarget;
        const modal = element.closest(".modal");
        const inputs = modal.querySelectorAll("[name]");
        const erros = [];
        const payload = {};

        inputs.forEach(input => {
            if(!input.value){
                const group = input.closest('.form-group');

                if(!group.querySelector('span.alert-error')){
                    const span = invalidMessage();
                    group.appendChild(span)
                
                    setTimeout(()=>{
                    span.remove();
                    }, 4000)
                }
               erros.push(1)
            } else{
                payload[input.name] = input.value 
            }
        });
        
        if(erros.length > 0) return;

        $.ajax({
            url: "/api/task",
            method: 'POST',
            data: payload,
            context: document.body 
          }).done(function({id = 2, sucesso} = {}) {
            if(!sucesso) return;

            const table = document.querySelector('table tbody')            
            let tasks = localStorage.getItem("tasks");
            const taskCurrent = {
                ...payload,
                id
            }

            tasks = Array.isArray(tasks) ? [...tasks, taskCurrent] : [taskCurrent];
            localStorage.setItem("tasks", JSON.stringify(tasks))
            table.appendChild(lineTask({
                dateValue: payload.entrega,
                idValue: id,
                priorityValue:payload.prioridade,
                statusValue: payload.status,
                titleValue: payload.titulo
            }))
            handleModal();

            inputs.forEach((input)=>{
                input.value = '';
            })
            $(modal).hide();
        });
    }
}