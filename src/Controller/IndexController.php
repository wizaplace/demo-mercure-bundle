<?php
/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function __invoke(): Response
    {
        return new Response(
            '<html><body>
                        <h1>Mercure</h1>
                        <ul>
                            <li><a href="/publish">Publish</a></li>
                            <li><a href="/available">Available</a></li>
                            <li><a href="/async">Async</a></li>
                            <li><a href="/discover">Discover</a></li>
                        </ul>
                     </body></html>'
        );
    }
}