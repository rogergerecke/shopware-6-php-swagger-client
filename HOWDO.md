# Shopware 6.4.7.0 Api

Genarate with openapi-genarator https://openapi-generator.tech/

# Description

Um von der Shopware Api automatisch die Klassen zu generieren mit OpenAPI Generator.

# Install
Install OpenAPI Generator Global as Node Module:

`npm install @openapitools/openapi-generator-cli -g`

### On Windows

Install JAVA SDK

# Set Dev Mode
Set in the Shopware .env APP_ENV=dev to make the OpenAPI context to public.

# Class generate

`npx @openapitools/openapi-generator-cli generate -i https://toshopware.de/api/_info/openapi3.json?type=json -g php -o C:/tmp/test/ --skip-validate-spec`