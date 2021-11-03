<?php
declare(strict_types=1);

namespace Astaroth\VkUtils\Contracts;

interface IShortVideo
{
    /**
     * @param bool $wallpost
     * @return static
     */
    public function setWallpost(bool $wallpost): IShortVideo;

    /**
     * @param bool $can_make_duet
     * @return static
     */
    public function setCanMakeDuet(bool $can_make_duet): IShortVideo;

    /**
     * @param string $description
     * @return static
     */
    public function setDescription(string $description): IShortVideo;

    /**
     * @param string $device_id
     * @return static
     */
    public function setDeviceId(string $device_id): IShortVideo;
}