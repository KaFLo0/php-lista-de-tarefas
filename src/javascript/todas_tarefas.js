function editar(id, txt_tarefa) {
  // Criar um form de edição
  let form = document.createElement('form');
  form.action = 'tarefa_controller.php?acao=atualizar';
  form.method = 'post';
  form.className = 'row';

  // Criar um input para entrada do texto
  let inputTarefa = document.createElement('input');
  inputTarefa.type = 'text';
  inputTarefa.name = 'tarefa';
  inputTarefa.className = 'form-control col-9';
  inputTarefa.value = txt_tarefa;

  // Criar um input hidden para guardar o id da tarefa
  let inputId = document.createElement('input');
  inputId.type = 'hidden';
  inputId.name = 'id';
  inputId.value = id;

  // Criar um button para envio do form
  let button = document.createElement('button');
  button.type = 'submit';
  button.className = 'btn btn-info col-3';
  button.innerHTML = 'Atualizar';

  // Incluir inputTarefa no form
  form.appendChild(inputTarefa);

  // Incluir inputId no form
  form.appendChild(inputId);

  // Incluir button no form
  form.appendChild(button);

  // Selecionar a div tarefa
  let tarefa = document.getElementById('tarefa_'+id);

  // Limpar o texto da tarefa para inclusão do form
  tarefa.innerHTML = '';

  // Incluir o form na página
  tarefa.insertBefore(form, tarefa[0]);

}

function remover(id) {
  location.href = 'todas_tarefas.php?acao=remover&id='+id;
}

function marcarRealizada(id) {
  location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
}