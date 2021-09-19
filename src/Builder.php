<?php

declare(strict_types=1);


namespace Astaroth\VkUtils;



use Astaroth\VkUtils\Contracts\IBuilder;

final class Builder extends AbstractFork
{
    /**
     * Create object builder
     * @param IBuilder ...$builders
     * @return string[]
     */
    public function create(IBuilder ...$builders): array
    {
        $callable = function (IBuilder $builder) {
            return $this->request($builder->getMethod(), $builder->getParams());
        };

        return $this->statusFork()
            ? $this->parallelRequest($callable, ...$builders)
            : $this->nonParallelRequest($callable, ...$builders);
    }
}