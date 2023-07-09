const valueOptions = [
    'Processando',
    'Em andamento',
    'Cancelado',
    'Finalizado',
];

export function select(){
    const select = document.createElement('select');
    select.name = "status";
    select.id = "status";
    valueOptions.forEach((value)=>{
        const option = document.createElement('option');
        option.value = value;
        option.innerText = value;
        select.appendChild(option);
    })
    return select;
}