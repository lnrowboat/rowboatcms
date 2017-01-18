<?php

namespace Rowboat\Core\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent; 

class BlockContainer extends Moloquent
{
     protected $collection = 'cms.blocks';
	 protected $connection = 'mongodb';
}
