<?php
$script_js = 'parameters';

$json = file_get_contents('../config/feeds.json');
$feeds = json_decode($json, true);

$choicesFeed = [];

if (isset($_POST['choicesFeed'])) {
    foreach ($_POST['choicesFeed'] as $keyChoice => $choice) {
        $choice = trim(htmlspecialchars($choice));
        if (count($choicesFeed) < 3) {
            foreach ($feeds as $keyFeed => $feed) {
                if ($feed["_id"] == $choice) {
                    array_push($choicesFeed, $feed);
                }
            }
        }
    }
    setcookie('choicesFeed', json_encode($choicesFeed), (time() + 3600), '/');
}

echo "<pre>";
print_r($choicesFeed);
echo "</pre>";


include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/parameters.php';
include __DIR__ . '/../views/templates/footer.php';
