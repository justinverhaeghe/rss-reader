<?php

/**
 *  
 *   
 *  require_once __DIR__ . '/helpers/fnFeed.php';
 *  
 * 
 */
function fnFeed(string $url, int $nbArticles)
{
    $articles = [];
    try {
        $feed =  simplexml_load_file($url);
        $items = $feed->channel->item;
        foreach ($items as $key => $item) {

            $title = (string) $item->title;
            $date = (string) $item->pubDate;
            $description = (string) $item->description;
            foreach ($item->children('media', true) as $k => $v) {
                $imageUrl = (string) $v->attributes()->url;
                $imageAlt = (string) $v->description;
            }
            $link = (string) $item->link;
            $article = [$title, $date, $imageUrl, $link, $description, $imageAlt];
            array_push($articles, $article);
            if (count($articles) == $nbArticles) {
                return $articles;
            }
        }
    } catch (\Throwable $th) {
        echo 'Exception reçue : ',  $th->getMessage(), "\n";
    }
}
