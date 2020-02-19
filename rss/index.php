<?php

header('Content-Type: application/rss+xml; charset=ISO-8859-1');

require "../vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadFromFile('../index.html');
$contents = $dom->find('article');

echo '<?xml version="1.0"?>';
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>An Open Book</title>
    <link>http://shesanopenbook.com</link>
    <description>An Open Book</description>
    <atom:link href="http://shesanopenbook.com/rss" rel="self" type="application/rss+xml" />

<?php

foreach ($contents as $index=>$content)
{
  $title = $content->find('h2')[0];
  $postBody = $content->find('.post--body');
  $postDate = $content->find('.post--date');
  $postAnchor = $content->find('.post--link');
  $postLink = $postAnchor->getAttribute('href');
  
  $output = "<item>\n";
  $output .= '<title>';
  $output .= $title->text;
  $output .= "</title>\n";
  $output .= '<link>';
  $output .= $postLink;
  $output .= "</link>\n";
  $output .= '<guid>';
  $output .= $postLink;
  $output .= "</guid>\n";
  $output .= '<description>';
  $output .= '<![CDATA[';
  $output .= $postBody->innerHtml;
  $output .= ']]>';
  $output .= "</description>\n";
  $output .= '</item>';

  echo $output;
}
?>

</channel>
</rss>