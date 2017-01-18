<?php

namespace Rowboat\Editor\Repositories;

use Rowboat\Core\Repositories;

interface ComponentEditorRepositoryInterface extends \Rowboat\Core\Repositories\ComponentRepositoryInterface{

	public function editContainer($id);

	public function editContent($id);
}