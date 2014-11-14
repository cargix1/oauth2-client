<?php

namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Entity\User;

class Shopify extends AbstractProvider
{
//    public $responseType = 'json';

    public function __construct($options)
    {
        parent::__construct($options);

        $this->shopify_url = $options['shopify_url'];

        $this->headers = array(
            'Authorization' => 'Bearer'
        );
    }

    public function urlAuthorize()
    {
    	return 'https://'.$this->shopify_url.'.myshopify.com/admin/oauth/authorize';
    }

    public function urlAccessToken()
    {
        return 'https://'.$this->shopify_url.'.myshopify.com/admin/oauth/access_token';
    }

    public function urlUserDetails(\League\OAuth2\Client\Token\AccessToken $token)
    {
        return false;
    }

    public function userDetails($response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return false;
    }

}
