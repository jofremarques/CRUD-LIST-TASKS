const valueOptions = {
    processando:'Processando',
    'em-andamento':'Em andamento',
    cancelado:'Cancelado',
    finalizado:'Finalizado',
};

export function select({ defaulValue } = {}){
    const select = document.createElement('select');
    select.name = "status";
    select.id = "status";
    
    Object.entries(valueOptions).forEach(([value, text])=>{
        const option = document.createElement('option');

        option.value = value;
        option.innerText = text;
        option.selected = (defaulValue == value);

        select.appendChild(option);
    })
    
    return select;
}