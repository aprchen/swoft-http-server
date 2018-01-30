<?php

namespace Swoft\Http\Server\Bootstrap;

use Swoft\Bean\Annotation\BootBean;
use Swoft\Core\BootBeanIntereface;
use Swoft\Http\Server\Parser\RequestParser;
use Swoft\Http\Server\Router\HandlerMapping;
use Swoft\Http\Server\ServerDispatcher;

/**
 * The core bean of http server
 *
 * @BootBean()
 */
class CoreBean implements BootBeanIntereface
{
    /**
     * @return array
     */
    public function beans()
    {
        return [
            'ServerDispatcher' => [
                'class' => ServerDispatcher::class,
            ],
            'httpRouter'       => [
                'class'          => HandlerMapping::class,
            ],
            'requestParser'    => [
                'class'   => RequestParser::class,
            ],
        ];
    }
}