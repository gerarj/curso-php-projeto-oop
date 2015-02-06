<?php

/**
 * Class de Clientes
 */
require_once('ClienteClassificacaoInterface.php');

class Cliente implements ClienteClassificacaoInterface{


	protected $id;

	protected $nome;

	protected $endereco;

	protected $type;

	protected $document;

	protected $documentType;

	protected $classificacao;

	protected $endereco_cobranca;


	public function __construct($id,$nome,$document,$endereco,$classificacao)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->endereco = $endereco;
		$this->endereco_cobranca = $endereco;
		$this->document = $document;
		$this->classificacao = $classificacao;

		return $this;
	}	


	public function setClassificacao($value)
	{
		$this->classificacao = (int) $value;
		return $this;
	}

	public function getClassificacao()
	{
		return $this->classificacao;
	}


	public function getId()
	{
		return $this->id;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setDocument($value)
	{
		$this->document = $value;
		return $this;
	}

	public function getDocument()
	{
		return $this->document;
	}

	public function getDocumentType()
	{
		return $this->documentType;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setEnderecoCobranca($value)
	{
		$this->endereco_cobranca = $value;
		return $this;
	}

	public function getEnderecoCobranca()
	{
		return $this->endereco_cobranca;
	}







}