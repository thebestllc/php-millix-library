# php-millix-library


This is a library in php for accessing the api's for the millix cryptocurrency.
In order to use this you need to be running the millix-node software or the tangled browser.
The tangled browser includes the millix-node software in it.

Three values are global and are required to access the api.

  $node_id		This is the node_id found in node.json in the millix directory 
  $node_signature	This is the node_signature for proving you have rights to access private apis.  Also in node.json
  $node_port	This is the port that node api access is on. The default port is 5500

