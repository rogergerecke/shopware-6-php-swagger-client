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
     * @Route("/shopware/add/new/product", name="shopware_add_new_product")
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws ApiException
     */
    public function addNewProduct(array $product = []): Response
    {
        
        $price[] = [
            "currencyId" => "b7d2554b0ce847cd82f3ac9bd1c0dfca",
            "gross"      => 1.88,
            "net"        => 1.5798319327731,
            "linked"     => false,
        ];
        // payload
        $payload = [
            "name"          => "Wunderbares Product ng 5",
            "productNumber" => "SWD235656157S-2",
            "stock"         => 10,
            "taxId"         => "9ca5271b607047989de1dfb16c182979",
            "price"         => $price,
        ];

        // full data
        $data = [
            'entity'  => 'product',
            'action'  => 'upsert',
            'key'     => 'write',
            'payload' => [$payload],
        ];


        $inline_object = array(new InlineObject($data));

        // on success return { "data": [ { "result": [ { "entities": { "product": [ "0d474b629c7c4d2a9fc3e09aaf1f5d30" ], "product_translation": [ { "productId": "0d474b629c7c4d2a9fc3e09aaf1f5d30", "languageId": "2fbb5fe2e29a4d70aa5854ce7ce3e20b" } ] }, "errors": [] } ], "extensions": [] } ], "success": true }
        return new Response($this->syncClient->sync($inline_object));
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