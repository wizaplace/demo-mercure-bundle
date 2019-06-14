<?php
/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Publisher;
use Symfony\Component\Mercure\Update;

class AvailableController
{
    public function __invoke(Publisher $publisher): Response
    {
        $update = new Update(
            'http://example.com/books/1',
            json_encode(['status' => 'available'])
        );

        $update2 = new Update(
            'http://example.com/books/2',
            json_encode(['status' => 'disabled'])
        );


        $publisher($update);
        $publisher($update2);

        return new Response('<html><body><h1>Available</h1><a href="/">Publish</a></body></html>');
    }
}