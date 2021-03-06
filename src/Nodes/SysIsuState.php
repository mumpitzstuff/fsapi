<?php

namespace FSAPI\Nodes;

/**
* SysIsuState is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysisustate
*
* see class Node for details
*
*/
class SysIsuState extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.isu.state';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
        $this->api_level = 1;
    }
}