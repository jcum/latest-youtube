<?php
$id = NULL;
$channel_id = '<Insert Youtube Channel ID here>';

$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

if (!empty($xml->entry[0]->children('yt', true)->videoId[0])){
  $id = $xml->entry[0]->children('yt', true)->videoId[0];
}
echo '<iframe width="854" height="480" src="https://www.youtube.com/embed/' . $id . '" frameborder="0" allowfullscreen"></iframe>';
?>

