<?php

namespace Rowboat\Core\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent; 
use Rowboat\Core\Entities\TemplateContent;


class TemplateContainer extends Moloquent implements ComponentContainerInterface
{
     protected $collection = 'build.templates.container';
	 protected $connection = 'mongodb';
	 public $timestamps = true;

	public function contents()
    {
        return $this->hasMany('Rowboat\Core\Entities\TemplateContent', 'container_id');
    }

}
