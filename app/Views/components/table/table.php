<div class="table">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Titulo</th>
                <th>Data de criação</th>
                <th>Status</th>
                <th style="width: 10%;padding: 0;"></th>
                <th style="width: 3%;padding: 0;"></th>
                <th style="width: 3%;padding: 0;"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 5%"> <input type="checkbox"></td>
                <td>Tarefa 01</td>
                <td>06/07/2023</td>
                <td>
                    <div class="info">
                        <select name="prioridade" id="prioridade">
                            <option value="processando">Processando</option>
                            <option value="em-andamento">Em andamento</option>
                            <option value="cancelado">Cancelado</option>
                            <option value="finalizado">Finalizado</option>
                        </select>
                    </div>
                </td>
                <td>
                    <button class="btn-details" onclick="openModal('details-modal')">
                        Detalhes
                    </button>
                </td>
                <td>
                    <button class="btn-edit" onclick="openModal('edit-modal')">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z" />
                        </svg>
                    </button>
                </td>
                <td>
                    <button class="btn-remove" onclick="openModal('delet-modal')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td><strong>Titulo</strong></td>
                <td><strong>Data de criação</strong></td>
                <td><strong>Status</strong></td>
                <td style="width: 10%;padding: 0;"></td>
                <td style="width: 3%;padding: 0;"></td>
                <td style="width: 3%;padding: 0;"></td>
            </tr>
        </tfoot>
    </table>
</div>
