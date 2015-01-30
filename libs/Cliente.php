<?php

/**
 * Class de Clientes
 */

class Cliente{


	private $id;

	private $nome;

	private $cpf;

	private $endereco;


	public function __construct($id,$nome,$cpf,$endereco)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	}


	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}


	public function getCpf()
	{
		return $this->cpf;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}






}