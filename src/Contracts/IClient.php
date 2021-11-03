<?php
declare(strict_types=1);

namespace Astaroth\VkUtils\Contracts;

use Astaroth\VkUtils\Exceptions\VkException;


/**
 * Interface Client
 * @package Astaroth\VkClient\Contracts
 */
interface IClient
{
    /**
     * @param string $method
     * @param array $parameters
     * @param string|null $token
     * @return array
     * @throws VkException
     */
    public function request(string $method, array $parameters = [], ?string $token = null): array;
}
