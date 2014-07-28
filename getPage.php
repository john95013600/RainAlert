<?
/*
PHP Crawler
*/
function xml(){

$doc = new DOMDocument();
$url = "http://alerts.ncdr.nat.gov.tw/RssAtomFeed.ashx";
$url2 = "http://alerts.ncdr.nat.gov.tw/RssAtomFeed.ashx?AlertType=10";
$doc->load($url);
$xmlString =  $doc->saveXML();
return $xmlString;
}
echo xml();

?>