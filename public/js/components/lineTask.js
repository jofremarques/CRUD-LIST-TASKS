import { pencilIcon } from "./icons/pencil.js";
import { tashIcon } from "./icons/trash.js";
import { select } from "./shared/select.js";

export function lineTask({idValue, titleValue, dateValue, selectValue} = {}){
    const tr = document.createElement("tr")

    const colInput = document.createElement("td");
    colInput.style.width = '5%';
    colInput.innerHTML = idValue;
    colInput.setAttribute("data-task-id", idValue)

    const colTitle = document.createElement("td");
    colTitle.innerText = titleValue;
    colTitle.setAttribute("data-ref", "titulo")

    const colDate = document.createElement("td");
    colDate.innerText = dateValue;
    colDate.setAttribute("data-ref", "entrega")

    const colSelect = document.createElement("td");
    colSelect.appendChild(select({
        defaulValue: selectValue
    }));
    colSelect.setAttribute("data-ref", "status")

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

    [colInput, colTitle, colDate, colSelect, colBtnDetails, colBtnEdit, colBtnRemove].forEach((td)=>{
        tr.appendChild(td)
    })

    return tr;
}