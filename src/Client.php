<?php

/**
 * @file
 * Contains Mpx\Client.
 */

namespace Mpx;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Message\RequestInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;

class Client extends GuzzleClient {
  use LoggerAwareTrait;

  public function __construct(array $config = [], LoggerInterface $logger) {
    // @todo Figure out what query strings we can actually hard-code here.
    $config['defaults']['query']['schema'] = '1.0';
    $config['defaults']['query']['httpError'] = 'true';
    $config['defaults']['query']['form'] = 'json';
    parent::__construct($config);
    $this->setLogger($logger);
  }

  /**
   * {@inheritdoc}
   */
  public function send(RequestInterface $request) {
    $this->logger->debug($request->getUrl());
    return parent::send($request);
  }
}
