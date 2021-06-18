<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class Users
 * @package EverHour\Resources
 *
 * @property Client $client
 */
class Users {
  /**
   * Projects constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @return array|mixed|object
   */
  public function me() {
    return $this->client->get('/users/me');
  }

  /**
   * @return array|mixed|object
   */
  public function findAll() {
    return $this->client->get('/team/users');
  }
}
