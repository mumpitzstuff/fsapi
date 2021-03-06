<?php

namespace FSAPI\Nodes;

/**
* MultiroomGroupName is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomgroupname
*
* see class Node for details
*
*/
class MultiroomGroupName extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.group.name';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
    }
}