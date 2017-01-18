<?php

namespace Rowboat\Editor\Repositories;

use \Rowboat\Core\Repositories\TemplateRepository;
use \Rowboat\Core\Entities\TemplateContent;
use \Rowboat\Core\Entities\TemplateContainer;

class TemplateEditorRepository extends ComponentEditorRepository implements ComponentEditorRepositoryInterface {


// all of these methods can be removed
	public function editContainer($id){
		dd('TemplateEditorRepository: editContainer()');
		return(TemplateContainer::find($id));
	}

	public function xx_createContainer($name, $folder_id = ''){
		$container = new TemplateContainer;
        $container->name = $name;
        $container->save();
		return(TemplateContainer::find($id));
	}

	public function editContent($id){
		dd('TemplateEditorRepository: editContent()');
		$container = TemplateContainer::find($id);
		$contents = TemplateContent::where('container_id',$id)->get();
		return($contents);
		return(TemplateContainer::find($id)->first());
	}
}