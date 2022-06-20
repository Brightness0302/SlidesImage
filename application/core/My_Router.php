<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Router extends CI_Router {
    protected function _parse_routes()
    {
    // Language detection over URL
      if($this->uri->segments[1] == $this->config->config['language']) {
        unset($this->uri->segments[1]);
      }    
      if(array_search($this->uri->segments[1], $this->config->config['languages'])) {
        $this->config->config['language'] = array_search($this->uri->segments[1], $this->config->config['languages']);
        unset($this->uri->segments[1]);
      }
      
      // Return default function
      return parent::_parse_routes();
    }  
}