<?php

namespace Drupal\dbdatasubs\Feeds\Fetcher;

use Drupal\Core\Config\ImmutableConfig;
use Drupal\Core\Site\Settings;
use Drupal\feeds\FeedInterface;
use Drupal\feeds\Plugin\Type\Fetcher\FetcherInterface;
use Drupal\feeds\Plugin\Type\PluginBase;
use Drupal\feeds\Result\RawFetcherResult;
use Drupal\feeds\StateInterface;

use \Firebase\JWT\JWT;

/**
 * Your Class Description.
 *
 * @FeedsFetcher(
 *   id = "dbdatasubs_fetcher",
 *   title = @Translation("Dashboard Data Submissions Fetcher"),
 *   description = @Translation("Dashboard Data Submissions Fetcher"),
 * )
 */
class DbDatasubs_Fetcher extends PluginBase implements FetcherInterface {

  /**
   * {@inheritdoc}
   */
  public function fetch(FeedInterface $feed, StateInterface $state) {
    $config = \Drupal::configFactory()->get('dbdatasubs.settings');
    $result = $this->DbDatasubsFunction($config);
    if ($result !== FALSE) {
      return new RawFetcherResult($result);
    }
    else {
      return new RawFetcherResult('');
    }
  }

  /**
   * Make the API queries to get the data the parser needs.
   *
   * @param ImmutableConfig $config
   *   Drupal Config object.
   *
   * @return string
   *   Returns an JSON encoded array of stdClass objects.
   */
  public function DbDatasubsFunction(ImmutableConfig $config) {
    //Get URL from settings.php
    $baseURL = Settings::get('api_url_base', 'https://api.vision-covid.org');
    $url = $baseURL . "/api/dashboard/datasubmissions";

    // Create JWT
    $key = "LRV7B8rFVNhf24DgWOXk3nitL8WIY8mVIsrEQKhbBU/OSnoe5RdBoITDXo9u66QxxWiPD8+HJAF6p+ZiT46F1A==";
    $payload = array(
        "iss" => "https://coviddash.westat.com",
        "iat" => time(),
        "nbf" => time(),
        "exp" => time() + (24*60*60),
        "username" => "jtoomer@westat.com",
        "role" => "Admin"
    );
   
    $jwt = JWT::encode($payload, $key);
    $bearer = "Bearer $jwt";

    $curl_h = curl_init($url);

    curl_setopt($curl_h, CURLOPT_HTTPHEADER,
        array(
            "Authorization: $bearer",
            "Content-Type: application/json"
        )
    );

    # do not output, but store to variable
    curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl_h);

    // Return a JSON encoded array for the parser to process.
    return $response;
  }

}