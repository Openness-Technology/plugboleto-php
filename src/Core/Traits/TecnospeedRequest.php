<?php

namespace Tecnospeed\Core\Traits;

use GuzzleHttp\Exception\ClientException;

trait TecnospeedRequest
{
  protected function createPostRequest(string $uri, array $data = [])
  {
    try {
      return $this->client->request('POST', $uri, ['json' => $data]);
    } catch (ClientException $e) {
      $response = $e->getResponse();
      return json_decode($response->getBody()->getContents());
    }
  }

  protected function createGetRequest(string $uri, array $query = [])
  {
    try {
      return $this->client->request('GET', $uri, ['query' => $query]);
    } catch (ClientException $e) {
      $response = $e->getResponse();
      return json_decode($response->getBody()->getContents());
    }
  }

  protected function createPutRequest(string $uri, array $data = [])
  {
    try {
      return $this->client->request('PUT', $uri, ['json' => $data]);
    } catch (ClientException $e) {
      $response = $e->getResponse();
      return json_decode($response->getBody()->getContents());
    }
  }
}
