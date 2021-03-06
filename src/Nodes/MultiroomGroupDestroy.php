<?php

namespace FSAPI\Nodes;

/**
* MultiroomGroupDestroy is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomgroupdestroy
*
* see class Node for details
*
*/
class MultiroomGroupDestroy extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.group.destroy';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}