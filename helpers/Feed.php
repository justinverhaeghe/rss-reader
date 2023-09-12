<?php

class Feed
{

    protected $xml;


    public static function load(string $url, NumberArticles $articles)
    {
        $xml = self::loadUrl($url);
        if ($xml->channel) {
            echo ($xml->channel->title);
        }
    }
    private static function loadUrl(string $url)
    {
        if ($data = @file_get_contents($url)) {
            return new SimpleXMLElement($data);
        } else {
            echo 'error';
        }
    }
}
