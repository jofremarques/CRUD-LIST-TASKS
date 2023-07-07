function openModal(modal){
    let element = document.getElementById(modal);
    if(!element)return;
    
    element.style.display= 'block';
    document.body.style.overflow = 'hiden';
} 

function closeModal(modal){
    let element = document.getElementById(modal);
    if(!element)return
    
    element.style.display= 'none';
    document.body.style.overflow = 'auto';
}