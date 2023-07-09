export function UpdateTask(){

    this.handle = (ev) => {
       const elementButton = ev.currentTarget
       const taksId = elementButton.dataset.taskCurrent

       $.ajax({
        url: `/api/task/${taksId}`,
        method: 'UPDATE',
        context: document.body 
      }).done(function() {
        const taskColumnOfId = document.querySelector(`[data-task-id='${taksId}']`)
        taskColumnOfId.closest("tr").remove();

        $("#edit-modal").hide();
    });
    }
}