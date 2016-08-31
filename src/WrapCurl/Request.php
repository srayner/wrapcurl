<?php

namespace WrapCurl;

class Request
{
    protected $url;
    protected $file;
    protected $ch;
    
    public function __construct($url)
    {
        $this->url = $url;
        $this->ch = curl_init($url);
        $this->file = null;
    }
    
    public function setOutput($file)
    {
        $this->file = $file;
        return $this;
    }
    
    public function exec()
    {
        if (!is_null($this->file)) {
            $fileHandle = fopen($this->file, 'w');
            curl_setopt($this->ch, CURLOPT_FILE, $fileHandle);
            curl_exec($this->ch);
            fclose($fileHandle);
        } else {
            curl_exec($this->ch);
        }
        
        curl_close($this->ch);
    }
}

