<?php
/**
 * Package: vitasped
 * User: viniciusdesa
 * Date: 04/08/13
 * Time: 19:18
 */

namespace Vita\Sped\NFe\Entity;


abstract class Emitente extends Pessoa implements EmitenteInterface
{

    protected $nomeFantasia;

    protected $codigoRegimeTributario;

    /**
     * @param mixed $codigoRegimeTributario
     */
    public function setCodigoRegimeTributario($codigoRegimeTributario)
    {
        $this->codigoRegimeTributario = $codigoRegimeTributario;
    }

    /**
     * @return mixed
     */
    public function getCodigoRegimeTributario()
    {
        return $this->codigoRegimeTributario;
    }

    /**
     * @param mixed $nomeFantasia
     */
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }
} 