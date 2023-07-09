import { pencilIcon } from "./icons/pencil.js";
import { tashIcon } from "./icons/trash.js";
import { input } from "./shared/input.js";
import { select } from "./shared/select.js";

export function lineTask(){
    const tr = document.createElement("tr")

    const colInput = document.createElement("td");
    colInput.style.width = '5%';
    colInput.appendChild(input('checkbox'));

    const colTitle = document.createElement("td");
    colTitle.innerText = 'Tarefa 01';

    const colDate = document.createElement("td");
    colDate.innerText = '06/07/2023';

    const colSelect = document.createElement("td");
    colSelect.appendChild(select());

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
    colBtnEdit.appendChild(btnEdit);

    const colBtnRemove = document.createElement('td');
    const btnRemove = document.createElement('button')
    btnRemove.className = 'btn-remove';
    btnRemove.dataset.buttonModal = 'delete-modal';
    btnRemove.innerHTML= tashIcon();
    colBtnRemove.appendChild(btnRemove);

    tr.appendChild(colInput);
    tr.appendChild(colTitle);
    tr.appendChild(colDate);
    tr.appendChild(colSelect);
    tr.appendChild(colBtnDetails);
    tr.appendChild(colBtnEdit);
    tr.appendChild(colBtnRemove);

    return tr;
}