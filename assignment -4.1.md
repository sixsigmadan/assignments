```php
public function __construct($host = '127.0.0.1', $port = '23', $timeout = 10){
		$this->setPrompt(">");
		$this->host = $host;
		$this->port = $port;
		$this->timeout = $timeout;
		
		// set some telnet special characters
		$this->NULL = chr(0);
		$this->DC1 = chr(17);
		$this->WILL = chr(251);
		$this->WONT = chr(252);
		$this->DO = chr(253);
		$this->DONT = chr(254);
		$this->IAC = chr(255);
		
		$this->connect();  	
//appropriate use of tabs, spaces, and line breaks and punctuation

	}
	
	/**
	* Destructor. Cleans up socket connection and command buffer
	* 
	* @return void 
	*/
	public function __destruct() {
		
		// cleanup resources
		$this->disconnect();
		$this->buffer = NULL;
		
	}
	
	/**
	* Attempts connection to remote host. Returns TRUE if sucessful.      
	* 
	* @return boolean
	*/
	public function connect(){
		
		// check if we need to convert host to IP
		if (!preg_match('/([0-9]{1,3}\\.){3,3}[0-9]{1,3}/', $this->host)) {
			
			$ip = gethostbyname($this->host);
			
			if($this->host == $ip){
				
				throw new Exception("Cannot resolve $this->host");
				
			} else{
				$this->host = $ip; 
			}
		}
		
		// attempt connection
		$this->socket = fsockopen($this->host, $this->port, $this->errno, $this->errstr, $this->timeout);
		
		if (!$this->socket){        	
			throw new Exception("Cannot connect to $this->host on port $this->port");
		}
		
		return self::TELNET_OK;
	}
	
	/**
	* Closes IP socket
	* 
	* @return boolean
	*/
	public function disconnect(){
		if ($this->socket){
			if (! fclose($this->socket)){
				throw new Exception("Error while closing telnet socket");                
			}
			$this->socket = NULL;
		}        
		return self::TELNET_OK;
	}
```
//appropriate use of tabs
//Good use of new lines
//Good use of spaces
        
    