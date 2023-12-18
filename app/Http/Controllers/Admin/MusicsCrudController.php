<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MusicsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MusicsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MusicsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Musics::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/musics');
        CRUD::setEntityNameStrings('musics', 'musics');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->column('name')->label('Название');
        $this->crud->column('music')->label('Песня');
        $this->crud->column('logo')->label('Логотип');
        $this->crud->column('description')->label('Описание');
    }
    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
    protected function setupCreateOperation()
    {
        $this->crud->field('name')->label('Навание');
        $this->crud->field('description')->label('Описание');
        $this->crud->addField([
            'name'      => 'music',
            'label'     => 'Песня',
            'type'      => 'upload',
            'withFiles' => true
        ]);
        $this->crud->addField([
            'name'      => 'logo',
            'label'     => 'Логотип',
            'type'      => 'upload',
            'withFiles' => true
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
