<?php
declare(strict_types=1);


namespace Astaroth\VkUtils\Contracts;

/**
 * Interface IScriptable
 * @package Astaroth\VkUtils\Contracts
 */
interface IScriptable
{
    /**
     * @return string
     */
    public function toScript(): string;
}
