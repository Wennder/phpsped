<?php
/**
 * Package: vitasped
 * User: viniciusdesa
 * Date: 04/08/13
 * Time: 19:36
 */

namespace Vita\Sped\NFe\Entity;


interface EmitenteInterface extends PessoaInterface
{
    public function getNomeFantasia();

    public function setNomeFantasia($nomeFantasia);

    public function getCodigoRegimeTributario();

    public function setCodigoRegimeTributario($codigoRegimeTributario);
} 