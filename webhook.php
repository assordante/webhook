<?php


class webhook
{



	function __construct($url) {

		$this->url = $url;

	}




	function sendwebhook($data)
	{
		if($this->url)
		{
			try
			{
			$ch = curl_init();

			$url = $this->url;

			curl_setopt_array( $ch, [
   			CURLOPT_URL => $url,
    		CURLOPT_POST => true,
    		CURLOPT_POSTFIELDS => $data,
    		CURLOPT_HTTPHEADER => [
    		    "Length" => strlen( $data ),
    		    "Content-Type" => "application/json"
    		]
				]);

			$response = curl_exec( $ch );
			curl_close( $ch );

			return 'Done';

			}catch(Exception $e)
			{
				throw new Exception("Errore: ".$e->getMessage());
			}

		}

		else
		{
			throw new Exception("Url non impostata");
		}

	}


}


?>
