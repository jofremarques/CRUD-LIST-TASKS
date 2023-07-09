<div id="add-modal" class="modal" data-modal='add-modal'>
    <div class="content-modal">
        <div class="head-modal flex">
            <h1 class="title-modal">Adicionar nova tarefa</h1>
            <span class="head-modal-fechar close-modal" data-close-modal='add-modal'>X</span>
        </div>
        <form data-form='add-task'>
            <div class="body-modal">
                <div class="row-modal flex justify-arround">
                    <div class="box">
                        <div class="form-group">
                            <label for="titulo">Titulo:</label>
                            <input type="text" id="titulo" name="titulo">
                        </div>
                    </div>
                    <div class="box ">
                        <div class="form-group">
                            <label for="descricao">Descrição:</label>
                            <input type="text" id="descricao" name="descricao">
                        </div>
                    </div>
                </div>
                <div class="row-modal flex justify-arround">
                    <div class="box">
                        <div class="form-group">
                            <label for="">Prioridade:</label>
                            <select name="prioridade" id="prioridade">
                                <option value="">Selecione</option>
                                <option value="baixa">baixa</option>
                                <option value="media">Media</option>
                                <option value="alta">Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="box ">
                        <div class="form-group">
                            <label for="">Status:</label>
                            <select name="status" id="status">
                                <option value="">Selecione</option>
                                <option value="processando">Processando</option>
                                <option value="em-andamento">Em andamento</option>
                                <option value="cancelado">Cancelado</option>
                                <option value="finalizado">Finalizado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row-modal">
                    <div class="box">
                        <div class="form-group">
                            <label for="">Prazo de entrega:</label>
                            <input type="date" name="entrega" id="entrega">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-modal">
                <button type="submit" class="confirm-modal" data-add-task='add-task'>Confirmar</button>
                <button class="close-modal" data-close-modal='add-modal'>Fechar</button>
            </div>
        </form>
    </div>
</div>