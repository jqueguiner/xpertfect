<?php
echo $rss->items($posts,'sortieRSS');

function sortieRSS($p){
    $p = $p['Post'];
    return array(
        'title' => $p['title'],
        'link'  => 'http://bonjourcosplay.com/'.strtolower(Inflector::slug($p['title'],'-')).'-'.$p['id'],
        'description' => $p['description'],
        'pubDate' => $p['date']
    );
}
?>