<?php
declare(strict_types=1);


namespace Astaroth\VkUtils;


use Spatie\Fork\Fork;
use function array_map;

abstract class AbstractFork extends Client
{

    /**
     * user token - 3 call\sec
     * group token - 20 call\sec
     * execute - 25 call in one request
     * https://vk.com/dev/api_requests
     *
     * if 1 - parallel requests is off
     */
    private ?int $concurrent = null;

    /**
     * Enable for
     * It's very fast
     *
     * @return static
     */
    public function setParallelProcess(int $count): AbstractFork
    {
        $this->concurrent = $count;
        return $this;
    }

    /**
     * @return bool
     */
    public function statusFork(): bool
    {
        return (bool)$this->concurrent;
    }

    /**
     * Fork tasks
     * @param callable $callable
     * @param object ...$instances
     * @return array
     */
    protected function parallelRequest(callable $callable, ...$instances): array
    {
        return Fork::new()
            ->concurrent($this->concurrent)
            ->run(...array_map(static fn($instance) => static fn() => $callable($instance), $instances));
    }

    /**
     * @param callable $callable
     * @param object ...$instances
     * @return array
     */
    protected function nonParallelRequest(callable $callable, ...$instances): array
    {
        return array_map(static function ($instance) use ($callable) {
            return $callable($instance);
        }, $instances);
    }
}