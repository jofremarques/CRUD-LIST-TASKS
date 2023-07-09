import { pencilIcon } from "./icons/pencil.js";
import { tashIcon } from "./icons/trash.js";

export function lineTask({idValue, titleValue, dateValue, priorityValue, statusValue} = {}){
    const tr = document.createElement("tr")

    const colId = document.createElement("td");
    colId.style.width = '5%';
    colId.innerHTML = idValue;
    colId.setAttribute("data-task-id", idValue)

    const colTitle = document.createElement("td");
    colTitle.innerText = titleValue;
    colTitle.setAttribute("data-ref", "titulo")

    const colDate = document.createElement("td");
    colDate.innerText = dateValue;
    colDate.setAttribute("data-ref", "entrega")

    const colPriority = document.createElement("td");
    colPriority.innerHTML = priorityValue;
    colPriority.setAttribute("data-ref", "priority")

    const colStatus = document.createElement("td");
    colStatus.innerHTML = statusValue;
    colStatus.setAttribute("data-ref", "status")

    const colBtnDetails = document.createElement("td");
    const btnDetails = document.createElement('button');
    btnDetails.className='btn-details';
    btnDetails.dataset.buttonModal = 'details-modal';
    btnDetails.innerText = 'Detalhes';
    colBtnDetails.appendChild(btnDetails);

    const colBtnEdit = document.createElement('td');
    const btnEdit = document.createElement('button')
    btnEdit.className = 'btn-edit';
    btnEdit.dataset.buttonModal = 'edit-modal';
    btnEdit.innerHTML= pencilIcon();
    btnEdit.setAttribute("data-task-target", idValue)
    colBtnEdit.appendChild(btnEdit);

    const colBtnRemove = document.createElement('td');
    const btnRemove = document.createElement('button')
    btnRemove.className = 'btn-remove';
    btnRemove.dataset.buttonModal = 'delete-modal';
    btnRemove.innerHTML= tashIcon();
    btnRemove.setAttribute("data-task-target", idValue)
    colBtnRemove.appendChild(btnRemove);

    [colId, colTitle, colDate, colPriority, colStatus, colBtnDetails, colBtnEdit, colBtnRemove].forEach((td)=>{
        tr.appendChild(td)
    })

    return tr;
}