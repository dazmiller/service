<?php

/*
 * This file is part of Laravel Exceptions.
 *
 * (c) Graham Campbell <graham@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Exceptions\Displayers;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Whoops\Handler\PrettyPageHandler as Handler;
use Whoops\Run as Whoops;

/**
 * This is the debug displayer class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class DebugDisplayer implements DisplayerInterface
{
    /**
     * Get the error response associated with the given exception.
     *
     * @param \Exception $exception
     * @param int        $code
     * @param string[]   $headers
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function display(Exception $exception, $code, array $headers)
    {
        $content = $this->whoops()->handleException($exception);

        return new Response($content, $code, array_merge($headers, ['Content-Type' => 'text/html']));
    }

    /**
     * Get the whoops instance.
     *
     * @return \Whoops\Run
     */
    protected function whoops()
    {
        $whoops = new Whoops();
        $whoops->allowQuit(false);
        $whoops->writeToOutput(false);
        $whoops->pushHandler(new Handler());

        return $whoops;
    }

    /**
     * Get the supported content type.
     *
     * @return string
     */
    public function contentType()
    {
        return 'text/html';
    }

    /**
     * Can we display the exception?
     *
     * @param \Exception $exception
     *
     * @return bool
     */
    public function canDisplay(Exception $exception)
    {
        return true;
    }

    /**
     * Do we provide verbose information about the exception?
     *
     * @return bool
     */
    public function isVerbose()
    {
        return true;
    }
}
