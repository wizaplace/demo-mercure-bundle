<?php
/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */
declare(strict_types=1);

namespace App\Controller;


use Fig\Link\Link;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DiscoverController extends AbstractController
{
    public function __invoke(Request $request): JsonResponse
    {
        // This parameter is automatically created by the MercureBundle
        $hubUrl = $this->getParameter('mercure.default_hub');

        // Link: <http://localhost:3000/hub>; rel="mercure"
        $this->addLink($request, new Link('mercure', $hubUrl));

        return $this->json([
            '@id' => '/books/1',
            'availability' => 'https://schema.org/InStock',
        ]);
    }
}