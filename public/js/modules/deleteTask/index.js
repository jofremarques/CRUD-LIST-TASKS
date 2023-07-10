export function DeleteTask(){

    this.handle = (ev) => {
       const elementButton = ev.currentTarget
       const taksId = elementButton.dataset.taskCurrent

       $.ajax({
        url: `/api/task`,
        method: 'DELETE',
        data: {
          id: taksId
        },
        context: document.body 
      }).done(function({sucesso, id}) {
        if(!sucesso || !id) return;

        const taskColumnOfId = document.querySelector(`[data-task-id='${id}']`)
        taskColumnOfId.closest("tr").remove();

        $("#delete-modal").hide();
    });
    }
}