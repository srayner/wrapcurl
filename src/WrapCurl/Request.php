<?php

namespace WrapCurl;

class Request
{
    protected $url;
    protected $ch;
    
    public function __construct($url)
    {
        $this->url = $url;
        $this->ch = curl_init();
    }
    
    public function exec()
    {
        $output = curl_exec($this->ch);
        curl_close($this->ch);
        return $output;
    }
}

