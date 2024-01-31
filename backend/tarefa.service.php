<?php

// CRUD
class TarefaService {
  private $conexao;
  private $tarefa;

  public function __construct(Conexao $conexao, Tarefa $tarefa) {
    $this->conexao = $conexao->conectar();
    $this->tarefa = $tarefa;
  }

  public function inserir() { // Create
    $query = 'INSERT INTO tb_tarefas(tarefa)VALUES(:tarefa);';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
    $stmt->execute();
  }

  public function recuperar() { // Read
    $query = 'SELECT
        t.id, s.status, t.tarefa 
      FROM 
        tb_tarefas AS t
        LEFT JOIN tb_status AS s ON (t.id_status = s.id)
      ;';
    $stmt = $this->conexao->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function atualizar() { // Update
    $query = 'UPDATE tb_tarefas SET tarefa = ? WHERE id = ?';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
    $stmt->bindValue(2, $this->tarefa->__get('id'));
    return $stmt->execute();
  }

  public function remover() { // Delete
    $query = 'DELETE FROM tb_tarefas WHERE id = :id';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':id', $this->tarefa->__get('id'));
    return $stmt->execute();
  }

  public function marcarRealizada() { // Update
    $query = 'UPDATE tb_tarefas SET id_status = ? WHERE id = ?';
    $stmt = $this->conexao->prepare($query);
    $stmt->bindValue(1, $this->tarefa->__get('id_status'));
    $stmt->bindValue(2, $this->tarefa->__get('id'));
    return $stmt->execute();
  }
}

?>