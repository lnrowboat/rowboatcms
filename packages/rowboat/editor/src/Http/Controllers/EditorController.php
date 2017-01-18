<?php

namespace Rowboat\Editor\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rowboat\Editor\Repositories\ComponentEditorRepositoryInterface;

abstract class EditorController extends Controller {

    protected $repository;

    public function __construct(ComponentEditorRepositoryInterface $repository) {
        $this->repository = $repository;
        // we will always need the listing of directories for this version
        $containers = $this->repository->getAll();
        view()->share('containers', $containers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('editor::scaffold.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('editor::scaffold.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request) {
        $name = $request->input('name');
        //$folder_id = $request->input('folder_id');
        $container = $this->repository->createContainer($name);
        //dd($container);
        return redirect($this->container_type . '/' . $container->_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  string $content
     * @param  int  $contianer_id
     * @param  int  $content_id
     * @return int $content_id
     */
    public function store($content, $container_id, $content_id = '') {
        return $this->repository->saveContent($content, $container_id, $content_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($container_id) {
        //
        $container = $this->repository->getContainer($container_id);
        // get content
        $content = $this->repository->getLatestContentByContainerId($container_id);
        //return response()->json($container, 200, array(), JSON_PRETTY_PRINT);
        return view('editor::scaffold.view', compact('container', 'content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $contianer_id
     * @param  int  $content_id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $container_id, $content_id = '') {
        // check for posted data
        $content = $request->input('content');
        if ($content) {
            $content_id = $this->store($content, $container_id, $content_id);
        }
        $container = $this->repository->getContainer($container_id);
        // for now, just use the latest content. This is where future updates will determine which version to edit
        if ($container->contents->isEmpty()) {
            $content = '';
        } else {
            $content = $container->contents->last()->content;
        }
        return view('editor::scaffold.editor', compact('container', 'content', 'content_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
