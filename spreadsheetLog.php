<?php
/**
 * Contact log to spreadsheet script.
 * 
 * This script is used to maintain a log of contacts who are
 * imported from Mission Hub to Connect.  As contacts are imported,
 * a log entry is created in a Google spreadsheet.
 *
 * This spreadsheet relies on the Zend Gdata PHP library.
 * It also requires the credentials for a Google user account with
 * access to the spreadsheet.
 *
 * To prepare for use:
 *   o  Download the latest Zend Gdata PHP Library from framework.zend.com/download/gdata/
 *   o  Copy the Zend library to a convenient place with the rest of your PHP code
 *   o  Add the path to the Zend library to your PHP include_path
 */

/**
 * @see Zend_Loader
 */
require_once 'Zend/Loader.php';

/**
 * @see Zend_Gdata
 */
Zend_Loader::loadClass('Zend_Gdata');

/**
 * @see Zend_Gdata_ClientLogin
 */
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');

/**
 * @see Zend_Gdata_Spreadsheets
 */
Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');

/**
 * @see Zend_Gdata_App_AuthException
 */
Zend_Loader::loadClass('Zend_Gdata_App_AuthException');

/**
 * @see Zend_Http_Client
 */
Zend_Loader::loadClass('Zend_Http_Client');

ini_set( 'display_errors', '1');

class SpreadsheetLogger
{
    /**
     * Constructor
     *
     * @param  string $email
     * @param  string $password
     * @return void
     */
    public function __construct($arguments = null)
    {
		// Currently, the login credentials are here.
		$email = 'campusforchrist.org@gmail.com';
		$password = 'gtamdoan';

        try {
          $client = Zend_Gdata_ClientLogin::getHttpClient($email, $password,
                    Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME);
        } catch (Zend_Gdata_App_AuthException $ae) {
          exit("Error: ". $ae->getMessage() ."\nCredentials provided were email: [$email] and password [$password].\n");
        }

        $this->gdClient = new Zend_Gdata_Spreadsheets($client);
        
        // Provide spreadsheet key and worksheet ID
        // Key can be obtained from the spreadsheet URL
        // Worksheet ID is a bit harder.
        $this->currKey = '0AhXawWocmC2qdFRMSmxkczh5NE5COUxBZE9zZmNXRmc';  // 'Connect log file'
        $this->currWkshtId = 'od6';
        $this->arguments = $arguments;
    }

    /**
     * getContacts
     *
     * Collect the list of newly imported contacts.  Not sure how this will be done yet.
     *
     * @return array
     */
    public function getContact()
    {
	    $now = date('Y-m-d H:i:s');
	    
	    // Pull all the relevant fields out of the request
	    // Note:  When inserting a row, all column names MUST match what is in the spreadsheet
	    // Exception:  Always send column names in all lower-case with no spaces.  
	    // They can be any case and include spaces in the spreadsheet
	    $keys = array('mhid'=>1,'connectid'=>1,'first'=>1,'last'=>1,'email'=>1,'campus'=>1,'error'=>1);
	    $data = array();
	    
	    // Pull arguments from command line or Request
	    if ($this->arguments) {
		    $contact = array_intersect_key($this->arguments, $keys);
	    } else {
		    $contact = array_intersect_key($_REQUEST, $keys);
	    }

	    $contact['timestamp'] = $now;
		return $contact;
    }

    /**
     * run
     *
     * @return void
     */
    public function run()
    {
		$contact = $this->getContact();

		// Insert a row for the contact
        $entry = $this->gdClient->insertRow($contact, $this->currKey, $this->currWkshtId);
    }
}

// process command line options
$arguments = null;
if (isset($argv)) {
	$arguments = array();
	foreach ($argv as $argument) {
		// The args should be in the format 'key=value'
		$argParts = explode('=', $argument);
		if (isset($argParts[1])) {
			$arguments[$argParts[0]] = $argParts[1];
		}
    }
}

$logger = new SpreadsheetLogger($arguments);
$logger->run();
