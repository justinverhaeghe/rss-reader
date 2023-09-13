<?php

/**
 *  
 *   
 *  require_once __DIR__ . '/helpers/fnFeed.php';
 *  // Feed::load("https://www.cnet.com/rss/news/", NumberArticles::DISPLAY_6);
 *  $url = "https://www.cnet.com/rss/news/";
 *  $url_1 = "https://www.zdnet.fr/feeds/rss/actualites/internet/";
 *  $url_2 = "https://www.lefigaro.fr/rss/figaro_secteur_high-tech.xml";
 *  $url_3 = "https://services.lesechos.fr/rss/les-echos-tech-medias.xml";
 *  $url_4 = "https://www.lemonde.fr/cultures-web/rss_full.xml";

 *  $articles = fnFeed($url_3, 6);
 *  echo "<pre>";
 *  print_r($articles);
 *  echo "</pre>";
 * 
 */
function fnFeed(string $url, int $nbArticles)
{
    $articles = [];
    try {

        $feed =  simplexml_load_file($url);
        $channel = $feed->channel;
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
