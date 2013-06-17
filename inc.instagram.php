<?php
//-- Include our library
include_once 'libraries/instaphp/instaphp.php';

//-- Get an instance of the Instaphp object
$api = Instaphp\Instaphp::Instance();

//-- Get the response for Popular media
$response = $api->Tags->Recent('stzlife');

//-- Check if an error was returned from the API
if (empty($response->error)) {
  foreach ($response->data as $item) {
    if ($i <13) {
    printf('<div class="span1 index-instagram-plugin"><a href="%s" target="_blank"><img src="%s" width="70" height="70" alt="%s" title="%s"></a></div>', $item->images->standard_resolution->url, $item->images->thumbnail->url, empty($item->caption->text) ? 'Untitle':$item->caption->text, empty($item->caption->text) ? 'Untitled':$item->caption->text);
    $i++;
    }
  }
}


?>