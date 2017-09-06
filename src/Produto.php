<?php
namespace App;

class Produto
{
	private $codigo;
	private $nome;
	private $valor;
	private $altura; // cm
	private $comprimento; // cm
	private $largura; // cm
	private $peso; // kg
	private $quantidade;

	public function __construct($codigo, $nome, $valor, $quantidade, $altura, $comprimento, $largura, $peso)
	{
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->valor = $valor;
		$this->quantidade = $quantidade;
		$this->altura = $altura;
		$this->comprimento = $comprimento;
		$this->largura = $largura;
		$this->peso = $peso;
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getValor()
	{
		return $this->valor;
	}

	public function getAltura()
	{
		return $this->altura;
	}

	public function getComprimento()
	{
		return $this->comprimento;
	}

	public function getLargura()
	{
		return $this->largura;
	}

	public function getPeso()
	{
		return $this->peso;
	}

	public function getQuantidade()
	{
		return $this->quantidade;
	}
}