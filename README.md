# php-millix-library


This is a library in php for accessing the api's for the millix cryptocurrency.
In order to use this you need to be running the millix-node software or the tangled browser.
The tangled browser includes the millix-node software in it.

Three values are global and are required to access the api.
>
 * $node_id		This is the node_id found in node.json in the millix directory 
 * $node_signature	This is the node_signature for proving you have rights to access private apis.  Also in node.json
 * $node_port	This is the port that node api access is on. The default port is 5500
>
>

>
## Example:
>
> This example uses a throwaway wallet created just for this.
>
```
<?php
    include "millix-library.php";

    $node_id = '1PMhekJAHqt7VAEY5GuWAWjRdWYac3uEX4';            // found in node.json
    $node_signature = '4yTaAicYGzaU9iwkA1vwRRFrtrcdMijJ9MUQFmqbXGvdUgjENSoaUKWGRamS2HxA7SLJNfqxYKj9CtjqNrYaHBpK';       // found in node.json
    $node_port = 5500;          // found in config.js in the node directory


    echo "get_session -- used to get the address and wallet information\n\n";
    var_dump(get_session());
```
>
> which if all goes well will return:
```
string(302) "{"api_status":"success","wallet":{"id":"UfWT4cXERIjRUFz+J3VKfKArJoSY2W+7PZlQiH03iqY=","address":"1KDBhw67ewrjME1kVJnbtwdpWPgtJoTckd0a01KDBhw67ewrjME1kVJnbtwdpWPgtJoTckd","address_key_identifier":"1KDBhw67ewrjME1kVJnbtwdpWPgtJoTckd","address_public_key":"22rWHt1iiwJwBKMZBXHNHYtWFKivbxCLDF7mRZuiMjPZa"}}"
```
>
> The address is the prime address and the address_key_identifier identifies the wallet.
>


