<?php
namespace DigixBundle\Controller;
use Facebook\GraphUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Google\Client;
use Google\Service\Analytics;
use Google\Service\Youtube;

class GooglePlusController extends Controller{

    function indexAction(){

        $scriptUri = "http://".$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];

        $client = new \Google_Client();
        $client->setScopes(array(
                'https://www.googleapis.com/auth/plus.me', 
                'https://www.googleapis.com/auth/userinfo.email',
                'https://www.googleapis.com/auth/userinfo.profile'));

        $client->setAccessType('offline');

        $client->setClientId('805819329649-1ekup47o7h7qgp56l40njtqo7v3rlgq3.apps.googleusercontent.com');
        $client->setClientSecret('xACx-ofzYMTVJxSehJU6swxB');
        $client->setRedirectUri($scriptUri);
        $client->setDeveloperKey('AIzaSyA19pkGacEYctC_xCWTBsWU7-JGPRifzr8');

        if (isset($_GET['logout'])) {
          unset($_SESSION['token']);
          die('Logged out.');
        }

        if (isset($_GET['code'])) { // we received the positive auth callback, get the token and store it in session
          $client->authenticate($_GET['code']);
          $_SESSION['token'] = $client->getAccessToken();
        }

        if (isset($_SESSION['token'])) { // extract token from session and configure client
          $token = $_SESSION['token'];
          $client->setAccessToken($token);
        }

        if (!$client->getAccessToken()) { // auth call to google
          $authUrl = $client->createAuthUrl();
          header("Location: ".$authUrl);
          die;
        }

        return $this->redirectToRoute('edit_profile_page');

        // $client = new \Google_Client();
        // $client->setClientId('805819329649-1ekup47o7h7qgp56l40njtqo7v3rlgq3.apps.googleusercontent.com');
        // $client->setClientSecret('xACx-ofzYMTVJxSehJU6swxB');

        // $client->setScopes('https://www.googleapis.com/auth/youtube');
        // $redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'],FILTER_SANITIZE_URL);
        // $client->setRedirectUri($redirect);

        // $youtube = new \Google_Service_YouTube($client);

        // if (isset($_GET['code'])) {
        //   if(isset($_SESSION['state']))
        //     if (strval($_SESSION['state']) !== strval($_GET['state'])) {
        //       die('The session state did not match.');
        //     }

        //   $client->authenticate($_GET['code']);
        //   $_SESSION['token'] = $client->getAccessToken();
        //   header('Location: ' . $redirect);
        // }

        // if (isset($_SESSION['token'])) {
        //     $client->setAccessToken($_SESSION['token']);
        // }

        // if ($client->getAccessToken()) {
        //   try {
        //       $channelsResponse = $youtube->channels->listChannels('contentDetails', array('mine' => 'true'));

        //       var_dump($channelsResponse);
        //       foreach ($channelsResponse['items'] as $channel) {
        //         $uploadsListId = $channel['contentDetails']['relatedPlaylists']['uploads'];

        //         $playlistItemsResponse = $youtube->playlistItems->listPlaylistItems('snippet', array('playlistId' => $uploadsListId,'maxResults' => 50));
        
        //         foreach ($playlistItemsResponse['items'] as $playlistItem) {
        //             echo $playlistItem['snippet']['title'];
        //             echo $playlistItem['snippet']['resourceId']['videoId'];
        //         }
        //       }
        //   } catch (Google_Service_Exception $e) {
        //    echo 'error'.$e->getMessage();
        //   } catch (Google_Exception $e) {
        //     echo 'client error'.$e->getMessage();
        //   }

        //   $_SESSION['token'] = $client->getAccessToken();
        //   } else {
        //   $state = mt_rand();
        //   $client->setState($state);
        //   $_SESSION['state'] = $state;

        //   $authUrl = $client->createAuthUrl();
        //   //echo '<a href='.$authUrl.'> login here</a>';
        //   return $this->redirect($authUrl);
        // }
        // //return $this->redirectToRoute('edit_profile_page');
        // return new Response();
    }
}
?>
