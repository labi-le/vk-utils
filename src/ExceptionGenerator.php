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
     */
    public function throw(): void
    {
        switch ($this->error_code) {
            case 0:
                throw new Exceptions\VkException(
                    $this->error_code,
                    $this->message
                );
            case 1:
                throw new Exceptions\UnknownErrorVkException(
                    $this->error_code,
                    $this->message
                );
            case 5:
                throw new Exceptions\AuthorizationFailedVkException(
                    $this->error_code,
                    $this->message
                );
            case 6:
                throw new Exceptions\TooManyRequestsVkException(
                    $this->error_code,
                    $this->message
                );
            case 7:
                throw new Exceptions\PermissionDeniedVkException(
                    $this->error_code,
                    $this->message
                );
            case 9:
                throw new Exceptions\TooMuchSimilarVkException(
                    $this->error_code,
                    $this->message
                );
            case 10:
                throw new Exceptions\InternalErrorVkException(
                    $this->error_code,
                    $this->message
                );
            case 14:
                throw new Exceptions\CaptchaRequiredVkException(
                    $this->error_code,
                    $this->message
                );
            case 15:
                throw new Exceptions\AccessDeniedVkException(
                    $this->error_code,
                    $this->message
                );
            case 27:
                throw new Exceptions\AccessTokenIsInvalidVkException(
                    $this->error_code,
                    $this->message
                );
            case 100:
                throw new Exceptions\MissingOrInvalidParametersException(
                    $this->error_code,
                    $this->message
                );

            default:
                throw new Exceptions\VkException(
                    $this->error_code,
                    $this->message
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