<?php

namespace Rowboat\Core\Repositories;

use Rowboat\Core\Entities\ComponentContainerInterface;
use Rowboat\Core\Entities\ComponentContentInterface;

abstract class ComponentRepository {

	protected $container;
	protected $content;

    public function __construct(ComponentContainerInterface $container, ComponentContentInterface $content){
        $this->container = $container;
        $this->content = $content;
    }


	public function getContent($content_id=''){
		$content = $this->content::find($content_id);
		return($content->content);
	}

	public function getLatestContentByContainerId($container_id){
		$contents = $this->content::where('container_id',$container_id)->get();
		//$content = array_slice($contents, -1, 1, TRUE);
		if($contents->count()){
			return($contents->last()->content);
		} else {
			return('');
		}
	}

	public function getContainer($id){
		
	}

}