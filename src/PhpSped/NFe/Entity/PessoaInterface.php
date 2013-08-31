<?php

namespace PhpSped\NFe\Entity;

interface PessoaInterface
{
    CONST TIPO_PESSOA_FISICA = 'F';

    CONST TIPO_PESSOA_JURIDICA = 'J';

    public function getNome();

    public function getCpfCnpj();

    public function getTipo();

    public function getInscricaoEstadual();

    public function getLogradouro();

    public function getNumero();

    public function getComplemento();

    public function getBairro();

    public function getMunicipioCodigo();

    public function getMunicipio();

    public function getCep();

    public function getUf();

    public function getPaisCodigo();

    public function getPais();

    public function getTelefone();

    public function setBairro($bairro);

    public function setCep($cep);

    public function setComplemento($complemento);

    public function setCpfCnpj($cpfCnpj);

    public function setInscricaoEstadual($inscricaoEstadual);

    public function setLogradouro($logradouro);

    public function setMunicipio($municipio);

    public function setMunicipioCodigo($municipioCodigo);

    public function setNome($nome);

    public function setNumero($numero);

    public function setPais($pais);

    public function setPaisCodigo($paisCodigo);

    public function setTelefone($telefone);

    public function setTipo($tipo);

    public function setUf($uf);
}