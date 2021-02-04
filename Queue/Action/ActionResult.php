<?php
/**
 * @package  Divante\PimcoreIntegration
 * @author Bartosz Herba <bherba@divante.pl>
 * @copyright 2018 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Divante\PimcoreIntegration\Queue\Action;

/**
 * Class ActionResult
 */
class ActionResult implements ActionResultInterface
{
    /**
     * @var string
     */
    private $result;

    /**
     * @var string
     */
    private $message;

    /**
     * ActionResult constructor.
     *
     * @param string $result
     * @param string $message
     */
    public function __construct(string $result, string $message)
    {
        $this->result = $result;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
