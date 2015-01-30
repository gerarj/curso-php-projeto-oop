<?php

/**
 * Class com Lista de Clientes
 */
class ClienteCollection{


	protected $clientes = array();


	public function add(Cliente $cliente){

		$this->clientes[] = $cliente;
	}


	public function getClientes()
	{
		return $this->clientes;
	}


	public function sortBy($direction)
	{
		if($direction == 'DESC')
		{
			krsort($this->clientes);
		}else{
			ksort($this->clientes);
		}

		return $this;
	}

	public function getTotal()
	{
		return count($this->clientes);
	}
}