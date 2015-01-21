<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <title>GitHub repository helper</title>
  <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
 <div class="search_page">

  <h2><span class="logo">GitHub</span> helper</h2>
  
  <!-- Search form -->
  <div class="searchbox">
    <form action=<?= $_SERVER['PHP_SELF'] ?> method="GET">
      <label for="searchText">Search for</label>
      <input type="text" name="searchText" id="searchText" />
      <input type="submit" name="searchSubmit" value="Send"/>
    </form>
  </div>

<?php
require('vendor/autoload.php');
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

if (isset($_GET['searchText'])) 
{
  $qtext  = htmlspecialchars($_GET['searchText']);
  $client = new Client();
  $request = $client->createRequest('GET', 'https://api.github.com/search/repositories');
  $query = $request->getQuery();
  $query['q'] = $qtext;
  try {
    $response = $client->send($request);
    $json = $response->json();
  }
  catch (ClientException $exc) {
    // HTTP errors come here as well
    echo $exc->getMessage();
    return;
  }
?>
  <div class="meta">
    <span>Found <?= $json["total_count"] ?> results</span>
  </div>
<?php
  $allitems = $json["items"];
  // We show the first 20 items
  $items1 = array_slice($allitems, 0, 20);
?>
  <div class="searchlist">
<?php
  foreach (array_values($items1) as $item) {
?>
    <div class="searchitem">
      <a class="name" href="<?= $item['html_url'] ?>"><?= htmlentities($item["name"]) ?></a>
      <div class="description"><?= htmlentities($item["description"]) ?></div>
      <div class="link"><?= htmlentities($item["html_url"]) ?></div>
    </div>
<?php    
  }
  echo '</div>';
}
?>
 </div>
</body>
</html>