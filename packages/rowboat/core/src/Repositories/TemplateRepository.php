<?php

namespace Rowboat\Core\Repositories;

class TemplateRepository extends ComponentRepository implements ComponentRepositoryInterface {

	public function test(){
		return(TemplateContainer::all());
	}

}