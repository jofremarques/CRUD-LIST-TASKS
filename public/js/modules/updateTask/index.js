export function UpdateTask(){

    this.handle = (ev) => {
      const element = ev.currentTarget;
      const taksId = element.dataset.taskCurrent
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
        url: `/api/task`,
        method: 'PUT',
        data: {
          ...payload,
          id: taksId
        },
        context: document.body 
      }).done(function({sucesso}) {
        
        if(sucesso) window.location.reload()
    });
    }
}