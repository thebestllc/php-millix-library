<?php
//  To use this library on an active millix node you need the following 3 values:
//
//    $node_id		This is the node_id found in node.json in the millix directory
//    $node_signature	This is the node_signature for proving you have rights to access private apis.  Also in node.json
//    $node_port	This is the port that node api access is on. The default port is 5500
//

    $node_id = '';		// found in node.json
    $node_signature = '';	// found in node.json
    $node_port = 5500;		// found in config.js in the node directory



function cryptography($param = null)
{
    // depending on direction encrypt or decrypt provided string
    // p0: direction (required)
    // p1: string (required)
    return(millix_api('ZXJ3DqyLslyQETkX', $param));
}

function end_session($param = null)
{
    // ends the active wallet session in the node
    return(millix_api('pIQZEKY4T9vttBUk', $param));
}

function event_log_list($param = null)
{
    // returns a event log list
    // p0: log_limit=1000
    return(millix_api('PZ7x3HVHVstLNYf0', $param));
}

function get_address_balance($param = null)
{
    // returns the available (stable) balance and pending (unstable) balance of an address
    // p0: address (required)
    return(millix_api('zLsiAkocn90e3K6R', $param));
}

function get_address_private_key($param = null)
{
    // returns the private key for the indicated address that is derived from the master key that is temporarily stored in node memory for the active wallet
    // p0: address (required)
    return(millix_api('PKUv2JfV87KpEZwE', $param));
}

function get_available_version($param = null)
{
    // returns a available client/browser version
    return(millix_api('WGem8x5aycBqFXWQ', $param));
}

function get_backlog_list($param = null)
{
    // return backlog list
    return(millix_api('0df01ae7dd51cec4', $param));
}

function get_config_by_name($param = null)
{
    // get node config by name
    return(millix_api('2wYLWQfWBa6GLPYs', $param));
}

function get_is_key_present($param = null)
{
    // returns boolean value of presence of private_key.json
    return(millix_api('LOLb7q23p8rYSLwv', $param));
}

function get_keychain_address($param = null)
{
    // returns the record for the identified address from table keychain and keychain_address
    // p0: address (required)
    return(millix_api('ywTmt3C0nwk5k4c7', $param));
}

function get_known_address_balance($param = null)
{
    // returns the available (stable) balance and pending (unstable) balance of all known addresses
    return(millix_api('xGaf7vbfY15TGsSd', $param));
}

function get_known_wallet_balance($param = null)
{
    // returns the available (stable) balance and pending (unstable) balance of all known wallet
    return(millix_api('NPCpnfUyPHRH4j29', $param));
}

function get_mnemonic_phrase($param = null)
{
    // returns the 24 word mnemonic phrase for the active session which is stored by default in the millix directory
    return(millix_api('BPZZ0l2nTfMSmmpl', $param));
}

function get_node_address_stat_summary($param = null)
{
    // returns a summary of address statistics from the host
    return(millix_api('Bz73Dm7u3dKlXDS8', $param));
}

function get_node_id($param = null)
{
    // identifies the node_id responding to the request at the provided IP address and api port
    return(millix_api('ZFAYRM8LRtmfYp4Y', $param));
}

function get_node_public_ip($param = null)
{
    // get node public ip
    return(millix_api('qRHogKQ1Bb7OT4N9', $param));
}

function get_node_transaction_stat_summary($param = null)
{
    // returns a summary of transaction statistics from the host
    return(millix_api('C9rEOewwhQDijCnN', $param));
}

function get_os_info($param = null)
{
    // get the node os info
    return(millix_api('RLOk0Wji0lQVjynT', $param));
}

function get_random_mnemonic($param = null)
{
    // returns a random mnemonic phrase
    return(millix_api('Gox4NzTLDnpEr10v', $param));
}

function get_session($param = null)
{
    // get the active wallet in the node
    return(millix_api('OBexeX0f0MsnL1S3', $param));
}

function get_stat_summary($param = null)
{
    // get the node stat summary
    return(millix_api('rKclyiLtHx0dx55M', $param));
}

function get_storage_config($param = null)
{
    // returns storage related config
    return(millix_api('kIoe20LWh2aw3CAu', $param));
}

function get_transaction($param = null)
{
    // returns a single record from table transaction as indicated by transaction_id in the indicated shard
    // p0: transaction_id (required)
    // p1: shard_id (required)
    return(millix_api('wDyC195wgjPjM2Ut', $param));
}

function get_transaction_extended($param = null)
{
    // returns a single record with all information about a transaction as indicated by transaction_id in the indicated shard
    // p0: transaction_id (required)
    // p1: shard_id (required)
    return(millix_api('IBHgAmydZbmTUAe8', $param));
}

function get_transaction_input($param = null)
{
    // returns a single record from table transaction_input as indicated by transaction_id and input_position in the indicated shard
    // p0: transaction_id (required)
    // p1: input_position (required)
    // p2: shard_id (required)
    return(millix_api('hbBmFhIpJS87W1Fy', $param));
}

function get_transaction_output($param = null)
{
    // returns a single record from table transaction_output as indicated by transaction_id and output_position in the indicated shard
    // p0: transaction_id<required
    // p1: output_position (required)
    // p2: shard_id (required)
    return(millix_api('KN2ZttYDEKzCulEZ', $param));
}

function get_transaction_output_data($param = null)
{
    // get binary data stored as a transaction output file
    // p0: transaction_id
    // p1: address_key_identifier
    // p2: attribute_type_id
    // p3: file_hash
    // p4: file_key
    return(millix_api('Mh9QifTIESw5t1fa', $param));
}

function get_transaction_output_key($param = null)
{
    // get the decrypt key for a transaction output file
    // p0: transaction_id
    // p1: attribute_type_id
    // p2: file_hash
    return(millix_api('3K2xvNRLMpiEqLo8', $param));
}

function get_transaction_output_stats($param = null)
{
    // get transaction output stats
    // p0: date_begin
    // p1: date_end
    // p2: node_id_origin
    // p3: is_stable
    // p4: is_parent
    // p5: is_timeout
    // p6: create_date_begin
    // p7: create_date_end
    // p8: status
    // p9: version
    // p10: address_key_identifier
    // p11: attribute_type_id
    // p12: data_type
    // p13: order_by="create_date desc"
    // p14: record_limit=1000
    // p15: shard_id
    return(millix_api('wWo8DCcoXVlpczoP', $param));
}

function get_unspent_output_summary($param = null)
{
    // returns the unspent output stat summary
    return(millix_api('FC8ylC617zzn1Gaa', $param));
}

function list_address($param = null)
{
    // returns records from table address. it returns the newest records by default
    // p0: address_base
    // p1: address_version
    // p2: address_key_identifier
    // p3: address
    // p4: status
    // p5: order_by="create_date desc"
    // p6: record_limit: 1000
    return(millix_api('72dlrjquBORj0rhx', $param));
}

function list_address_version($param = null)
{
    // return records from table address_version
    return(millix_api('3XqkzNFzaTk1JPRf', $param));
}

function list_config_private($param = null)
{
    // returns private config values that are only available to the node operator
    // p0: type
    // p1: status
    // p2: order_by="create_date desc"
    // p3: record_limit=1000
    return(millix_api('CZOTAF5LfusB1Ht5', $param));
}

function list_config_public($param = null)
{
    // returns returns public config values
    // p0: type
    // p1: status
    // p2: order_by="create_date desc"
    // p3: record_limit=1000
    return(millix_api('hXwPQrVhLEALFsIJ', $param));
}

function list_keychain_address($param = null)
{
    // returns records from table keychain_address. it returns the newest records by default
    // p0: address_key_identifier
    // p1: wallet_id
    // p2: is_change
    // p3: order_by="create_date desc"
    // p4: record_limit:1000
    return(millix_api('quIoaHsl8h6IwyEI', $param));
}

function list_log($param = null)
{
    // returns a list of log items from the node. it returns the newest records by default
    // p0: type
    // p1: content
    // p2: date_begin
    // p3: date_end
    // p4: order_by="create_date desc"
    // p5: record_limit=1000
    return(millix_api('GMDazQSouYWzLTCv', $param));
}

function list_node($param = null)
{
    // returns a list of peer nodes known by the host.  it returns the newest records by default
    // p0: status
    // p1: order_by="create_date desc"
    // p2: record_limit=1000
    return(millix_api('0eoUqXNE715mBVqV', $param));
}

function list_node_attribute($param = null)
{
    // returns records from table node_attributes.  it returns the newest records by default
    // p0: node_id
    // p1: attribute_type_id
    // p2: status
    // p3: order_by="create_date desc"
    // p4: record_limit=1000
    return(millix_api('AgsSNTSA0RHmWUkp', $param));
}

function list_node_memory_extended($param = null)
{
    // returns a list of all peer nodes (node table and memory list) known by the host.  it returns the newest records by default
    // p0: status
    // p1: order_by="create_date desc"
    // p2: record_limit=1000
    return(millix_api('vM27tlHkqbRej6tP', $param));
}

function list_shard($param = null)
{
    // returns records from table shard. it returns the newest records by default
    // p0: shard_type
    // p1: is_required
    // p2: node_id_origin
    // p3: status
    // p4: order_by="create_date desc"
    // p5: record_limit=1000
    return(millix_api('OMAlxmPq4rZs71K8', $param));
}

function list_transaction($param = null)
{
    // returns a list of transaction records from table transaction. it returns the newest records by default
    // p0: date_begin
    // p1: date_end
    // p2: node_id_origin
    // p3: is_stable
    // p4: is_parent
    // p5: is_timeout
    // p6: create_date_begin
    // p7: create_date_end
    // p8: status
    // p9: order_by="create_date desc"
    // p10: record_limit=1000
    // p11: shard_id
    return(millix_api('l4kaEhMnhjB5yseq', $param));
}

function list_transaction_history($param = null)
{
    // list transaction history for a given wallet
    // p0: address_key_identifier<require>
    return(millix_api('w9UTTA7NXnEDUXhe', $param));
}

function list_transaction_input($param = null)
{
    // returns records from table transaction_input that match the provided parameters.  it returns the newest records by default
    // p0: transaction_id
    // p1: date_begin
    // p2: date_end
    // p3: address_key_identifier
    // p4: is_double_spend
    // p5: double_spend_date_begin
    // p6: double_spend_date_end
    // p7: output_transaction_id
    // p8: output_position
    // p9: order_by="create_date desc"
    // p10: record_limit=1000
    // p11: shard_id
    return(millix_api('I3EoELuQCmqwvp8C', $param));
}

function list_transaction_output($param = null)
{
    // returns records from table transaction_output that match the provided parameters.  it returns the newest records by default
    // p0: transaction_id
    // p1: date_begin
    // p2: date_end
    // p3: address_key_identifier
    // p4: is_double_spend
    // p5: double_spend_date_begin
    // p6: double_spend_date_end
    // p7: is_stable
    // p8: stable_date_begin
    // p9: stable_date_end
    // p10: is_spent
    // p11: spent_date_begin
    // p12: spent_date_end
    // p13: order_by="create_date desc"
    // p14: record_limit=1000
    // p15: shard_id
    return(millix_api('FDLyQ5uo5t7jltiQ', $param));
}

function list_transaction_output_attribute_received($param = null)
{
    // returns received transactions attribute records from table transaction_output_attribute that match the provided parameters.  it returns the newest records by default
    // p0: date_begin
    // p1: date_end
    // p2: node_id_origin
    // p3: is_stable
    // p4: is_parent
    // p5: is_timeout
    // p6: create_date_begin
    // p7: create_date_end
    // p8: status
    // p9: version
    // p10: address_key_identifier
    // p11: attribute_type_id
    // p12: data_type
    // p13: order_by="create_date desc"
    // p14: record_limit=1000
    // p15: shard_id
    return(millix_api('Mu7VpxzfYyQimf3V', $param));
}

function list_transaction_output_attribute_received($param = null)
{
    // returns received transaction attribute records from table transaction_output_attribute
    // p0: transaction_id (required)
    // p1: shard_id
    // p2: attribute_type_id
    // p3: data_type
    return(millix_api('yyCtgjuFu9mx0edg', $param));
}

function list_transaction_output_attribute_sent($param = null)
{
    // returns sent transactions attribute records from table transaction_output_attribute that match the provided parameters.  it returns the newest records by default
    // p0: date_begin
    // p1: date_end
    // p2: node_id_origin
    // p3: is_stable
    // p4: is_parent
    // p5: is_timeout
    // p6: create_date_begin
    // p7: create_date_end
    // p8: status
    // p9: version
    // p10: address_key_identifier
    // p11: attribute_type_id
    // p12: data_type
    // p13: order_by="create_date desc"
    // p14: record_limit=1000
    // p15: shard_id
    return(millix_api('F7APEv5JfCY1siyz', $param));
}

function new_address_version_released($param = null)
{
    // inserts a new record to table address_version.  is_main_network indicates whether the new address version is on the main network or on a test network.  if the new record indicates is_default = true the previous address_version record set to is_default = true is updated to is_default = false.  there can only be a single record for each network that is set to is_default = true
    // p0: version (required)
    // p1: regex_pattern (required)
    // p2: is_main_network (required)
    // p3: is_default (required)
    return(millix_api('hMrav9QMiMyLQosB', $param));
}

function new_keychain_address($param = null)
{
    // generates a new address and returns the new address record from table address
    return(millix_api('Lb2fuhVMDQm1DrLL', $param));
}

function new_node($param = null)
{
    // inserts a new record to table node
    // p0: node_prefix (required)
    // p1: node_address (required)
    // p2: node_port (required)
    // p3: node_port_api (required)
    return(millix_api('DuOnf1Wqi29oJUaA', $param));
}

function new_session($param = null)
{
    // uses the passphrase to activate the wallet used in the previous session
    // p0: passphrase (required)
    return(millix_api('PMW9LXqUv7vXLpbA', $param));
}

function new_session_with_file($param = null)
{
    // uses the passphrase and file path containing the 24 word mnemonic phrase to set the active wallet used in the session by the node
    // p0: passphrase (required)
    // p1: mnemonic_file_path (required)
    return(millix_api('NwYcrWsmpE1p8ylI', $param));
}

function new_session_with_phrase($param = null)
{
    // uses the passphrase and 24 word mnemonic phrase to set the active wallet used in the session by the node
    // p0: passphrase (required)
    // p1: mnemonic_phrase (required)
    return(millix_api('GktuwZlVP39gty6v', $param));
}

function optimize_database($param = null)
{
    // executes the sqlite optimize database function on the indicated shard_id, or on all shards if shard_id is not provided. this API pauses the node service, tasks and network until it is finished
    // p0: shard_id
    return(millix_api('4wR3kjTwwC67R94Z', $param));
}

function register_node_identity($param = null)
{
    // this API pushes a value from the client node to the host node for it to apply to its database. it upserts a record in the host node's table node_attribute with attribute_type_id = node_public_key.  if a corresponding node_id does not exist in table node, that is inserted as well
    // p0: public_key (required)
    return(millix_api('PwwdU9lZbgMqS2DA', $param));
}

function reload_configs_from_database($param = null)
{
    // reloads configurations from the database
    return(millix_api('QgbDSAuy1SYgocs6', $param));
}

function remove_address_version($param = null)
{
    // remove wallet address version
    return(millix_api('XgxHmjINTEqANwtS', $param));
}

function reset_backlog($param = null)
{
    // reset backlog
    return(millix_api('epOW5kdvb12QdgsV', $param));
}

function reset_transaction_validation($param = null)
{
    // resets transaction validation
    return(millix_api('QISzUVake29059bi', $param));
}

function reset_transaction_verification_timeout($param = null)
{
    // resets is_timeout field in table transaction records belonging to the provided key_identifier from true to false to allow the node to retry transaction validation
    // p0: key_identifier (required)
    return(millix_api('Fv9lheUpVYq5caRe', $param));
}

function reset_validation_transaction_by_guid($param = null)
{
    // reset transaction validation by transaction guid
    return(millix_api('P2LMh8NsUTkpWAH3', $param));
}

function send_aggregation_transaction_from_wallet($param = null)
{
    // submits a new aggregation transaction from the active wallet which optimizes the funds and allows spending more funds in fewer transactions. this API builds the tx payload and submits it
    return(millix_api('kC5N9Tz06b2rA4Pg', $param));
}

function send_transaction($param = null)
{
    // submits a new transaction with a transaction payload, containing inputs, signatures, outputs and amounts to the node. this API is generally used in conjunction with the output from API RVBqKlGdk9aEhi5J (sign_transaction)
    // p0: transaction_payload_signed (required)
    // p1: proxy_time_limit<default 30000ms>
    return(millix_api('VnJIBrrM0KY3uQ9X', $param));
}

function send_transaction_from_wallet($param = null)
{
    // submits a new transaction from the active wallet, specifying the outputs and amounts to the node. this API builds the tx payload and submits it
    // p0: transaction_output_payload<require>
    return(millix_api('XPzc85T3reYmGro1', $param));
}

function send_transaction_with_data_from_wallet($param = null)
{
    // submits a new transaction with data on dag from the active wallet, specifying the outputs and amounts to the node. this API builds the tx payload and submits it
    // p0: transaction_output_payload<require>
    return(millix_api('XQmpDjEVF691r2gX', $param));
}

function sign_transaction($param = null)
{
    // accepts an unsigned transaction payload and private keys to produce a signed version of the transaction_payload_unsigned that is used by API VnJIBrrM0KY3uQ9X to send a transaction
    // p0: transaction_payload_unsigned (required)
    // p1: private_key_hex (required)
    return(millix_api('RVBqKlGdk9aEhi5J', $param));
}

function support_shard($param = null)
{
    // adds support to an existent shard
    // p0: shard_id (required)
    // p1: shard_attribute={}
    return(millix_api('FAow0eot8ZejZUTJ', $param));
}

function sync_transaction_output_data($param = null)
{
    // sync binary data stored as a transaction output file
    // p0: transaction_id
    // p1: address_key_identifier
    // p2: attribute_type_id
    // p3: file_hash
    // p4: file_key
    return(millix_api('SLzLU50givH77Rns', $param));
}

function toggle_service_network($param = null)
{
    // toggles the network service for all networks (main or test networks) between running (true) and not running (false)
    // p0: is_running (required)
    return(millix_api('5sgpSNaqnHIcfocl', $param));
}

function toggle_service_node($param = null)
{
    // toggles the node service between running (true) and not running (false)
    // p0: is_running (required)
    return(millix_api('yefPsK2TvkZmC6M4', $param));
}

function update_config_value($param = null)
{
    // updates table config value field for the indicated config_id record
    // p0: config_id (required)
    // p1: value (required)
    return(millix_api('LLpSTquu4tZL8Nu5', $param));
}

function verify_address($param = null)
{
    // verifies if an address is valid
    // p0: address (required)
    return(millix_api('Xim7SaikcsHICvfQ', $param));
}

function verify_dns_has_address_key_identifier($param = null)
{
    // check if the address key identifier is configure in the dns tx record
    // p0: dns (required)
    // p1: address_key_identifier (required)
    return(millix_api('DjwvDZ4bGUzKxOHW', $param));
}

function wallet_stop_ongoing_transaction($param = null)
{
    // stops ongoing transaction if any
    return(millix_api('RIlwZyfnizp2i8wh', $param));
}

function millix_api($api,$param)
{
    global $node_id;
    global $node_signature;
    global $node_port;

    $url="https://localhost:$node_port/api/$node_id/$node_signature/".$api;

    $ch = curl_init();

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_ENCODING,'');
	curl_setopt($ch, CURLOPT_MAXREDIRS,10);
	curl_setopt($ch, CURLOPT_TIMEOUT,0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	
	if($api=='XQmpDjEVF691r2gX')
	{
            if (isset($param['p1']))
            {
	    	$param['p1']=new CURLFILE($param['p1']);
            }
            else
            {
            	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            	$param=json_encode($param);
            }

	    curl_setopt($ch,CURLOPT_CUSTOMREQUEST, 'POST');
	    curl_setopt($ch,CURLOPT_POSTFIELDS, $param);
        
	}
	else
	{
            $url.="?";
            foreach($param as $key=>$val) 
	    {
           	$url.=$key."=".urlencode($val)."&";
            }
            $url=rtrim($url,"&");
	}

//---- for debuging purposes ---
/*
 *  	echo "\n\n Api: $api\n";
 *	var_dump($param);
 *	echo "\n-----------------------------\n";
 */
	


    	curl_setopt($ch, CURLOPT_URL, $url);

	$response = curl_exec($ch);

//--- for debuging purposes ---
/*
 *	echo "response:\n";
 *	var_dump($response);
 *	echo "\n*********************************\n";
 */
	
	if (curl_errno($ch)) 
	{
    		$error_msg = curl_error($ch);
		$response=json_encode($error_msg);
	}
	return $response;
}

?>
