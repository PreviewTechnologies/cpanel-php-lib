<?php
namespace CpanelPhp\Cpanel;


class Response
{
    private $response;

    public $data;

    public $metadata;

    public function __construct($response)
    {
        $this->response = $response;
        $responseArray = $this->toArray();

        if(in_array('data', array_keys($responseArray))){
            $this->data = $responseArray['data'];
        }

        $this->metadata = $responseArray['metadata'];
    }

    public function toArray()
    {
        return json_decode($this->response, true);
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}