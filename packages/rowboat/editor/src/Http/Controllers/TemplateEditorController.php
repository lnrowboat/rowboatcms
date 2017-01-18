<?php

namespace Rowboat\Editor\Http\Controllers;

use Rowboat\Editor\Repositories\TemplateEditorRepository;

use Doctrine\ODM\MongoDB\DocumentManager;
use Rowboat\Core\Entities\Account;

class TemplateEditorController extends EditorController {

    public function __construct(TemplateEditorRepository $repository) {
        parent::__construct($repository);
        $this->container_type = 'template';
        view()->share('container_type', $this->container_type);
    }

    public function mongoFindAndInsert( DocumentManager $dm ) {
        $item = new Account('new item value');
        //var_dump($item);
        $user = $dm->find('Rowboat\Core\Entities\Account', '587e3b85ba859e1b68007eab');
        echo 'found------';
        var_dump($user);
        echo '<br /><br />inserted---';
        var_dump($item);
        $dm->persist($item);
        $dm->flush();
    }

}
