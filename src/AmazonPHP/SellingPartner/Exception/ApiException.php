<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Exception;

final class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var null|\stdClass|string
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var null|string[]
     */
    protected ?array $responseHeaders;

    /**
     * The deserialized response object.
     *
     * @var null|\stdClass|string
     */
    protected $responseObject;

    /**
     * Constructor.
     *
     * @param string $message Error message
     * @param int $code HTTP status code
     * @param null|string[][] $responseHeaders HTTP response header
     * @param null|\stdClass|string $responseBody HTTP decoded body of the server response either as \stdClass or string
     * @param null|\Throwable $previousException
     */
    public function __construct(string $message = '', int $code = 0, array $responseHeaders = null, $responseBody = null, \Throwable $previousException = null)
    {
        parent::__construct($message, $code, $previousException);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header.
     *
     * @return null|string[] HTTP response header
     */
    public function getResponseHeaders() : ?array
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string.
     *
     * @return null|\stdClass|string HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization).
     *
     * @param mixed $obj Deserialized response object
     */
    public function setResponseObject($obj) : void
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization).
     *
     * @return null|\stdClass|string the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
