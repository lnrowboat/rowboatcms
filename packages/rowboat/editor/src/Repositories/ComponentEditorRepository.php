<?php

namespace Rowboat\Editor\Repositories;

abstract class ComponentEditorRepository extends \Rowboat\Core\Repositories\ComponentRepository 
{

	public function getAll(){
		return($this->container::all());
	}

	public function getContainer($container_id){
		return($this->container::find($container_id));
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

//	public function getContent($content_id=''){
//		$content = $this->content::find($content_id);
//		return($content->content);
//	}

	public function createContainer($name, $folder_id = ''){
        $this->container->name = $name;
        $this->container->save();
		return($this->container);
	}

	public function saveContent($content, $container_id, $content_id = '') {
		// save in existing content_id if set, otherwise, create new
		if($this->validateContent($content)){
			$container = $this->container::find($container_id);
			if($content_id == ''){
				$myContent = new $this->content;
			} else {
				$myContent = $this->content::find($content_id);
				//dd($myContent);
			}
        	$myContent->content = $content;
        	$myContent->save();
        	$container->contents()->save($myContent);
			return $myContent->_id;	
		}
	}

	private function validateContent($content){
		return true;
	}
}