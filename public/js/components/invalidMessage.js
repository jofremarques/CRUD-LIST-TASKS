export function invalidMessage(){
    const span = document.createElement('span');
    span.className = 'alert-error';
    span.style.fontSize='0.9rem';
    span.style.fontWeight='600';
    span.style.color='#dc3545';
    span.innerHTML = 'O campo não pode ficar vazio';

    return span;
} 