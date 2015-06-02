<?php 
	
	namespace DigixBundle\Controller;
	require_once('EpiCurl.php');
	require_once('EpiOAuth.php');
	require_once('EpiTwitter.php');
	require_once('secret.php');
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;

	class TwitterController extends Controller{

		function indexAction(){
			/*$settings = array('oauth_access_token' => "3246021028-R1o8zn5jFHHiipRbETuqP8TaztJEYBC1kX1f4xC",
					  'oauth_access_token_secret' => "oEFsw8HhKYfp2E6iaweqhMjl01bX8M4zQ3qdQpgTW4iDb",
					  'consumer_key' => "1ixgqaZKjUvgx12H6ghoRCrXS",
					  'consumer_secret' => "IvAYD1vBT9tQYtIIdvZYaiPTQHlRBb2VtBMcHvg3hAtfRTYKJj");*/

			$consumer_key = '1ixgqaZKjUvgx12H6ghoRCrXS';
			$consumer_secret = 'IvAYD1vBT9tQYtIIdvZYaiPTQHlRBb2VtBMcHvg3hAtfRTYKJj';


			$twitterObj = new \EpiTwitter($consumer_key, $consumer_secret);
			$oauth_token = $_GET['oauth_token'];
			return new Response();
		}	
	}
	
?>