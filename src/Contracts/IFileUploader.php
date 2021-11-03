<?php
declare(strict_types=1);


namespace Astaroth\VkUtils\Contracts;


/**
 * Interface IFileUploader
 * @package Astaroth\VkUtils\Contracts
 */
interface IFileUploader
{
    /**
     * @param ICanBeSaved ...$CompatibilityInstances
     * @return array
     * @throws \Exception
     */
    public function upload(...$CompatibilityInstances): array;
}