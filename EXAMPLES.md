# Examples

Use the generated OpenAPI V3 Models with Symfony as bridgehead.  Send API calls with Symfony to Shopware 6 Api

# Example init the Api sync interface

```
// Service/ShopwareRest/RestClient.php

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
$this->client = new BulkOperationsApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
new Client(),
$this->config
);

        return $this->client;
    }
```

# Example use in a Symfony controller
```
// Controller/Shopware/Product/ProduktController.php

private BulkOperationsApi $syncClient;

    public function __construct(RestClient $restClient)
    {
        $this->syncClient = $restClient->getSyncInstance();
    }
    
/**
* TEST
* @Route("/shopware/update/product", name="shopware_update_product")
* @throws ServerExceptionInterface
* @throws RedirectionExceptionInterface
* @throws ClientExceptionInterface
* @throws ApiException
*/
public function updateProduct(): Response
{

         $product_update = [
              "id"    => "293566a3312d49c69c05c0d5ca8e90d3",
              "name"=>"Test to set new Name",
              "stock" => 1000,
          ];

        $data = [
            "entity"  => "product",
            "action"  => "upsert",
            "payload" =>
                [$product_update],
        ];
        

        $inline_object = array(new InlineObject($data));
        
        return new Response($this->syncClient->sync($inline_object));
    }
```