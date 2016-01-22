<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	function xml_default($rootNodeName='api'){
		return "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><{$rootNodeName} />";
	}
	
	function xml_trim($string=false){
		return trim(preg_replace('/[^\x00-\x7F]/','',$string));
	}
	
	function toXML( $data, $rootNodeName = 'api', &$xml=null ) {
	
        // turn off compatibility mode as simple xml throws a wobbly if you don't.
        if ( ini_get('zend.ze1_compatibility_mode') == 1 ) ini_set ( 'zend.ze1_compatibility_mode', 0 );
        if ( is_null( $xml ) ) //$xml = simplexml_load_string( "" );
            $xml = simplexml_load_string(xml_default($rootNodeName));
		
        // loop through the data passed in.
        foreach( $data as $key => $value ) {
		   $key = xml_trim($key);
            $numeric = false;
            
            // no numeric keys in our xml please!
            if ( is_numeric( $key ) ) {
                $numeric = 1;
                $key = $rootNodeName;
            }

            // delete any char not allowed in XML element names
            $key = preg_replace('/[^a-z0-9\-\_\.\:]/i', '', $key);

            // if there is another array found recrusively call this function
            if ( is_array( $value ) ) {
                $node = isAssoc( $value ) || $numeric ? $xml->addChild( $key ) : $xml;

                // recrusive call.
                if ( $numeric ) $key = 'anon';
                toXml( $value, $key, $node );
            } else {
// 			var_dump($value);
                // add single node.
                $value = htmlentities( xml_trim($value) );
                $xml->addChild( $key, $value );
            }
        }

        // pass back as XML
//         return $xml->asXML();

    // if you want the XML to be formatted, use the below instead to return the XML
        $doc = new DOMDocument('1.0');
        $doc->preserveWhiteSpace = false;
        $doc->loadXML( $xml->asXML() );
        $doc->formatOutput = true;
        return $doc->saveXML();
    }
    
    function isAssoc( $array ) {
        return (is_array($array) && 0 !== count(array_diff_key($array, array_keys(array_keys($array)))));
    }