<?php
declare(strict_types=1);


namespace Astaroth\VkUtils\Contracts;


use Astaroth\VkUtils\Exceptions\VkException;
use Astaroth\VkUtils\Requests\Request;

interface IExecute
{
    /**
     * @param Request[] $request
     * @return IScriptable[]
     * @throws VkException
     */
    public function send(array $request): array;
}