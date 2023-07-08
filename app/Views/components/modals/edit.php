<div id="edit-modal" class="modal">
    <div class="content-modal">
        <div class="head-modal flex">
            <h1 class="title-modal">Editar tarefa XXXX</h1>
            <span class="head-modal-fechar close-modal" onclick="closeModal('edit-modal')">X</span>
        </div>
        <div class="body-modal">
            <div class="row-modal flex justify-arround">
                <div class="box">
                    <div class="form-group">
                        <label for="titulo">Titulo:</label>
                        <input type="text" id="titulo">
                    </div>
                </div>
                <div class="box ">
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input type="text" id="descricao">
                    </div>
                </div>
            </div>
            <div class="row-modal flex justify-arround">
                <div class="box">
                    <div class="form-group">
                        <label for="">Prioridade:</label>
                        <select name="prioridade" id="prioridade">
                            <option value="baixa">baixa</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>
                </div>
                <div class="box ">
                    <div class="form-group">
                        <label for="">Status:</label>
                        <select name="prioridade" id="prioridade">
                            <option value="baixa">baixa</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
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
            <button class="confirm-modal">Confirmar</button>
            <button class="close-modal" onclick="closeModal('edit-modal')">Fechar</button>
        </div>
    </div>
</div>