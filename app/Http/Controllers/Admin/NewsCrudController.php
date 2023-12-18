<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\News::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/news');
        CRUD::setEntityNameStrings('news', 'news');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->column('id')->label('id');
        $this->crud->column('header')->label('Название');
        $this->crud->column('image')->label('Логотип');
        $this->crud->column('body')->label('Описание');
        $this->crud->column('posted_at')->label('Дата публикации');
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->field('header')->label('Навание');
        $this->crud->field('body')->label('Описание');
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Картинка',
            'type' => 'upload',
            'disk' => 'public',
            'prefix' => 'news',
            'upload_fields' => [
                'file_name' => 'file_name',
                'disk' => 'disk',
            ],
            'withFiles' => true,
        ]);
        $this->crud->field('posted_at')->label('Дата и время публикации')
            ->type('datetime')
            ->attributes(['format' => 'DD/MM/YYYY HH:mm',]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
