import { invalidMessage } from "../../components/invalidMessage.js";
import { lineTask } from "../../components/lineTask.js";
import { handleModal } from "../modal/index.js";

export function CreateTask() {

    this.handle = (ev) => {
        const element = ev.currentTarget;
        const modal = element.closest(".modal");
        const inputs = modal.querySelectorAll("[name]");
        const inputValues = {};
        const erros = [];
        const payload = {};

        ev.preventDefault();
        inputs.forEach(input => {
            if(input.value == ""){
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
        
        if(erros.length == 0){
            inputs.forEach((input,key)=>{
                inputValues[key] = input.value;
                input.value = '';
            })
            console.log(inputValues);
            const table = document.querySelector('table tbody')
            table.appendChild(lineTask())
            handleModal();
        
            $(modal).hide();
        }
    }
}