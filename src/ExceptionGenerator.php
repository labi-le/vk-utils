<?php
declare(strict_types=1);


namespace Astaroth\VkUtils;

/**
 * Class ExceptionGenerator
 * @package Astaroth\VkUtils
 */
class ExceptionGenerator
{
    public const RuntimeException = 289;

    private string $message;
    private int $error_code;

    /**
     * @throws Exceptions\CaptchaRequiredVkException
     * @throws Exceptions\PermissionDeniedVkException
     * @throws Exceptions\UnknownErrorVkException
     * @throws Exceptions\VkException
     * @throws Exceptions\TooMuchSimilarVkException
     * @throws Exceptions\AuthorizationFailedVkException
     * @throws Exceptions\InternalErrorVkException
     * @throws Exceptions\AccessDeniedVkException
     * @throws Exceptions\TooManyRequestsVkException
     * @throws Exceptions\MissingOrInvalidParametersException
     * @throws Exceptions\AccessTokenIsInvalidVkException
     * @throws Exceptions\RateLimitReachedVkException
     */
    public function throw(): void
    {
        switch ($this->error_code) {
            case 0:
                throw new Exceptions\VkException(
                    $this->message,
                    $this->error_code
                );
            case 1:
                throw new Exceptions\UnknownErrorVkException(
                    $this->message,
                    $this->error_code
                );
            case 5:
                throw new Exceptions\AuthorizationFailedVkException(
                    $this->message,
                    $this->error_code
                );
            case 6:
                throw new Exceptions\TooManyRequestsVkException(
                    $this->message,
                    $this->error_code
                );
            case 7:
                throw new Exceptions\PermissionDeniedVkException(
                    $this->message,
                    $this->error_code
                );
            case 9:
                throw new Exceptions\TooMuchSimilarVkException(
                    $this->message,
                    $this->error_code
                );
            case 10:
                throw new Exceptions\InternalErrorVkException(
                    $this->message,
                    $this->error_code
                );
            case 14:
                throw new Exceptions\CaptchaRequiredVkException(
                    $this->message,
                    $this->error_code
                );
            case 15:
                throw new Exceptions\AccessDeniedVkException(
                    $this->message,
                    $this->error_code
                );
            case 27:
                throw new Exceptions\AccessTokenIsInvalidVkException(
                    $this->message,
                    $this->error_code
                );
            case 29:
                throw new Exceptions\RateLimitReachedVkException(
                    $this->message,
                    $this->error_code
                );
            case 100:
                throw new Exceptions\MissingOrInvalidParametersException(
                    $this->message,
                    $this->error_code
                );

            default:
                throw new Exceptions\VkException(
                    $this->message,
                    $this->error_code
                );
        }
    }

    /**
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, string $message)
    {
        $this->error_code = $code;
        $this->message = $message;
    }
}