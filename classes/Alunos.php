<?php
class Alunos
{
	public $id;
	public $nome;
    public $email;
    public $Comentario;
	public $turma_id;
	public $confirmacao;

	public function __construct($id = false)
	{
		if (isset($id)){
			$this->id = $id;
		}
	}

	public function listar()
	{
		$sql = "SELECT * FROM alunos";
		$conexao = new PDO('mysql:host=localhost;dbname=escolar','root','');
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}
	

	public function inserir()
	{
		$sql = "INSERT INTO alunos (nome, email, Comentario, turma_id, confirmacao) VALUES (
					'" .$this->nome. "' ,
					'" .$this->email. "' ,
					'" .$this->Comentario. "' ,
					'" .$this->turma_id. "' ,
					'" .$this->confirmacao. " '
			)";
		$conexao = new PDO('mysql:host=localhost;dbname=escolar','root','');
		$conexao->exec($sql);
	}

	public function excluir()
	{
		$sql = "DELETE FROM alunos WHERE id=".$this->id;
		$conexao = new PDO('mysql:host=localhost;dbname=escolar','root','');
		$conexao->exec($sql);
	}

	public function aceitar()
	{
		$sql = "UPDATE alunos SET confirmacao ='1'";
		$conexao = new PDO('mysql:host=localhost;dbname=escolar','root','');
		$conexao->exec($sql);
		
	}

	public function aceito()
	{
		$sql = "SELECT * FROM alunos WHERE confirmacao = '1'";
		$conexao = new PDO('mysql:host=localhost;dbname=escolar','root','');
		$resultado = $conexao->query($sql);
		$lista = $resultado->fetchAll();
		return $lista;
	}
}