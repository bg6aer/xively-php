<?php namespace Xively;


/**
 * Xively API Client Exception
 *
 *
 * @author Daniel Boorn - daniel.boorn@gmail.com
 * @copyright Daniel Boorn
 * @license Creative Commons Attribution-NonCommercial 3.0 Unported (CC BY-NC 3.0)
 */
class Exception extends \Exception
{

    public $response;
    public $extra;

    public function __construct($message, $code = 0, $response = null, $extra = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->response = $response;
        $this->extra = $extra;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getExtra()
    {
        return $this->extra;
    }

}

