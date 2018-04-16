<?php

namespace Lullabot\Mpx\DataService\Media;

/**
 * Implements the dependent TransferInfo object for MediaFiles.
 *
 * @see https://docs.theplatform.com/help/media-transferinfo-object
 */
class TransferInfo
{
    /**
     * The password portion of the credentials required to access the file on the server.
     *
     * @var string
     */
    protected $password;

    /**
     * The private key for accessing the file on the server.
     *
     * @var string
     */
    protected $privateKey;

    /**
     * Whether the server supports downloads of linked files.
     *
     * @var bool
     */
    protected $supportsDownload;

    /**
     * Whether the server supports streaming of linked files.
     *
     * @var bool
     */
    protected $supportsStreaming;

    /**
     * The username portion of the credentials required to access the file on the server.
     *
     * @var string
     */
    protected $userName;

    /**
     * A list of local zones that the physical server resides in.
     *
     * @var string[]
     */
    protected $zones;

    /**
     * Returns the password portion of the credentials required to access the file on the server.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the password portion of the credentials required to access the file on the server.
     *
     * @param string
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Returns the private key for accessing the file on the server.
     *
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }

    /**
     * Set the private key for accessing the file on the server.
     *
     * @param string
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    /**
     * Returns whether the server supports downloads of linked files.
     *
     * @return bool
     */
    public function getSupportsDownload(): bool
    {
        return $this->supportsDownload;
    }

    /**
     * Set whether the server supports downloads of linked files.
     *
     * @param bool
     */
    public function setSupportsDownload($supportsDownload)
    {
        $this->supportsDownload = $supportsDownload;
    }

    /**
     * Returns whether the server supports streaming of linked files.
     *
     * @return bool
     */
    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    /**
     * Set whether the server supports streaming of linked files.
     *
     * @param bool
     */
    public function setSupportsStreaming($supportsStreaming)
    {
        $this->supportsStreaming = $supportsStreaming;
    }

    /**
     * Returns the username portion of the credentials required to access the file on the server.
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * Set the username portion of the credentials required to access the file on the server.
     *
     * @param string
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * Returns a list of local zones that the physical server resides in.
     *
     * @return string[]
     */
    public function getZones(): array
    {
        return $this->zones;
    }

    /**
     * Set a list of local zones that the physical server resides in.
     *
     * @param string[]
     */
    public function setZones($zones)
    {
        $this->zones = $zones;
    }
}