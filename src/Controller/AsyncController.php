<?php
/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Messenger\MessageBusInterface;

class AsyncController
{
    public function __invoke(MessageBusInterface $bus): Response
    {
        $update = new Update(
            'http://example.com/books/1',
            json_encode(['status' => 'Async'])
        );

        $update2 = new Update(
            'http://example.com/books/2',
            json_encode(['status' => 'Async 2'])
        );

        // Sync, or async (RabbitMQ, Kafka...)
        $bus->dispatch($update);
        $bus->dispatch($update2);

        return new Response('published!');
    }
}