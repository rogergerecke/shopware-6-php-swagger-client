<?php

namespace App\Service\ShopwareRest;

use App\Exception\EdcBridgeException;
use OpenAPI\Client\Api\BulkOperationsApi;
use OpenAPI\Client\Configuration;
use GuzzleHttp\Client;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

/**
 * My rest client inti class to handle the shopware api
 * with generate OpenAPI V3 Model classes
 */
class RestClient
{
    /**
     * @var ShopwareAuthentication
     */
    private ShopwareAuthentication $authentication;
    private Configuration $configuration;
    private Configuration $config;


    /**
     * @param ShopwareAuthentication $authentication
     * @param Configuration $configuration
     */
    public function __construct(ShopwareAuthentication $authentication, Configuration $configuration)
    {
        // init
        $this->authentication = $authentication;
        $this->configuration = $configuration;

        // get config load token
        $this->config = $this->configuration->setAccessToken($this->authentication->getAccessToken());
    }

    /**
     * Return a OpenApi instance for
     * @return BulkOperationsApi
     */
    public function getSyncInstance(): BulkOperationsApi
    {
        return new BulkOperationsApi(
            new Client(),
            $this->config
        );
    }

}