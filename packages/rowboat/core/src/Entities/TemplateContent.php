<?php

namespace Rowboat\Core\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent; 

class TemplateContent extends Moloquent implements ComponentContentInterface
{
     protected $collection = 'build.templates.content';
	 protected $connection = 'mongodb';
	 public $timestamps = true;

	public function container()
    {
        return $this->belongsTo('Rowboat\Core\Entities\TemplateContainer',null,'container_id');
    }
}
