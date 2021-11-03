<?php /** @noinspection PhpPropertyOnlyWrittenInspection */

declare(strict_types=1);


namespace Astaroth\VkUtils\Builders;


use Astaroth\VkUtils\Contracts\IBuilder;
use Astaroth\VkUtils\Contracts\IPostBuilder;

final class Post implements IPostBuilder, IBuilder
{
    private ?int $owner_id = null;
    private bool $friends_only = false;
    private bool $from_group = false;

    private ?string $message = null;
    private ?string $attachments = null;
    private ?string $services = null;
    private ?string $signed = null;

    private ?int $publish_date = null;
    private ?float $lat = null;

    private ?float $long = null;
    private ?int $place_id = null;

    private ?int $post_id = null;
    private ?string $guid = null;

    private bool $mark_as_ads = false;
    private bool $close_comments = false;
    private ?int $donut_paid_duration = null;

    private bool $mute_notifications = false;

    private ?string $copyright = null;


    /**
     * @inheritDoc
     */
    public function setOwnerId(int $owner_id): Post
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setFriendsOnly(bool $friends_only): Post
    {
        $this->friends_only = $friends_only;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setFromGroup(bool $from_group): Post
    {
        $this->from_group = $from_group;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setMessage(?string $message): Post
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setAttachments(...$attachments): Post
    {
        $this->attachments = implode(',', $attachments);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setServices(string $services): Post
    {
        $this->services = $services;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setSigned(string $signed): Post
    {
        $this->signed = $signed;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPublishDate(int $publish_date): Post
    {
        $this->publish_date = $publish_date;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setLat(float $lat): Post
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setLong(float $long): Post
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPlaceId(int $place_id): Post
    {
        $this->place_id = $place_id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPostId(int $post_id): Post
    {
        $this->post_id = $post_id;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setGuid(string $guid): Post
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setMarkAsAds(bool $mark_as_ads): Post
    {
        $this->mark_as_ads = $mark_as_ads;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setCloseComments(bool $close_comments): Post
    {
        $this->close_comments = $close_comments;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setDonutPaidDuration(int $donut_paid_duration): Post
    {
        $this->donut_paid_duration = $donut_paid_duration;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setMuteNotifications(bool $mute_notifications): Post
    {
        $this->mute_notifications = $mute_notifications;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setCopyright(string $copyright): Post
    {
        $this->copyright = $copyright;
        return $this;
    }

    public function getParams(): array
    {
        return get_object_vars($this);
    }

    public function getMethod(): string
    {
        return "wall.post";
    }
}