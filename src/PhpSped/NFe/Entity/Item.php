<?php

namespace PhpSped\NFe\Entity;


abstract class Item
{
	protected $sequencia;

    protected $codigo;

    protected $descricao;

	protected $ncm;

	protected $nve;

	protected $exTipi;

	protected $cfop;

	protected $unidadeMedidaComercial;

	protected $qtdComercial;

	protected $vlrUnComercial;

	protected $vlrProd;

	protected $unidadeMedidaTributavel;

	protected $qtdTributavel;

	protected $vlrUnTributavel;

	protected $vlrFrete;

	protected $vlrSeguro;

	protected $vlrDesconto;

	protected $vlrOutrasDespesas;

	protected $vlrTotalTributos;

	protected $indTotal;

	protected $declaracaoImportacao;

	protected $grupoExportacao;

	protected $produtoEspecifico;

	protected $icms;

	protected $impostoImportacao;

	protected $pis;

	protected $cofins;

	protected $ipi;

	protected $issqn;

	protected $tributoDevolvido;


}