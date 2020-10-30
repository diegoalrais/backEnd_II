<?php

class Ouvidoria 
{
	protected $conn;
	public function __construct()
	{	
		$this->conn = new PDO('mysql:host='.SERVIDOR.';dbname='.BANCO, USUARIO, SENHA, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
	}


	function consultar($protocolo)
	{
		$protocolo = preg_replace("/[^a-zA-Z0-9\/]+/", "", $protocolo);
		$sql = $this->conn->prepare('SELECT * from ouvidoria where protocolo = :prot');
		$sql->execute(array(
			':prot' => $protocolo
		));

		$retorno = $sql->fetch(PDO::FETCH_ASSOC);
		if (!empty($retorno)){
			return $retorno;
		}
		return false;
	}


	public function cadastrar()
	{	
	
		$protocolo = $this->conn->query(" SELECT protocolo as ultimo from ouvidoria where	ouvidoria.protocolo like concat('%/',year(now())) order by protocolo desc LIMIT 1");
		$protocolo = $protocolo->fetch(PDO::FETCH_ASSOC);
		if (empty($protocolo)){
			$protocolo = '0001/'.date('Y');
		}else{
			$numero = explode('/',$protocolo['ultimo'])[0];
			$numero = (int)$numero;
			$numero++;
			$protocolo = str_pad($numero,4,'0',STR_PAD_LEFT).'/'.date('Y');
		}
		$this->protocolo = $protocolo;

		$sql=$this->conn->prepare("INSERT INTO 
		`ouvidoria` (`protocolo`, `nome`, `cpf`, `rg`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `pais`, `telefone_ddd`, `telefone_numero`, `celular_ddd`, `celular_numero`, `mensagem`, `resposta`, `dataResposta`)
		VALUES (			
			:protocolo,
			:nome,
			:cpf,
			:rg,
			:email,
			:cep,
			:logradouro,
			:numero,
			:complemento,
			:bairro,
			:cidade,
			:uf,
			:pais,
			:telefone_ddd,
			:telefone_numero,
			:celular_ddd,
			:celular_numero,
			:mensagem,
			NULL,
			NULL
			
		);");

		$cadastra = $sql->execute(array(
			':protocolo'=>$this->protocolo, 
			':nome'=>$this->nome, 
			':cpf'=>$this->cpf, 
			':rg'=>$this->rg, 
			':email'=>$this->email, 
			':cep'=>$this->cep, 
			':logradouro'=>$this->logradouro, 
			':numero'=>$this->numero, 
			':complemento'=>$this->complemento, 
			':bairro'=>$this->bairro, 
			':cidade'=>$this->cidade, 
			':uf'=>$this->uf, 
			':pais'=>$this->pais, 
			':telefone_ddd'=>$this->telefone_ddd, 
			':telefone_numero'=>$this->telefone_numero, 
			':celular_ddd'=>$this->celular_ddd, 
			':celular_numero'=>$this->celular_numero,
			':mensagem'=>$this->mensagem
		));
	}

	
}

	