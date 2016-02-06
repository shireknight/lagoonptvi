<div id="feed">
  <h4>Weather on St. John</h4>
<?php
	require_once( trailingslashit( get_template_directory() ) . 'rss/rss_fetch.inc');
	$feed = 'http://rss.wunderground.com/auto/rss_full/VI/Saint_John.xml?units=english';
	$rss = fetch_rss($feed);
?>

<?php
	foreach($rss->items as $key => $item){
		if($key < 1){
		echo '<p><a href="' . $item['link'] . '" target="_blank">' . $item['title'] . '</a></p>';
	}
}
?>
<small>Presented by: <a href="http://rss.wunderground.com/auto/rss_full/VI/Saint_John.xml?units=english" target="_blank">Weather Underground</a></small>
</div>
