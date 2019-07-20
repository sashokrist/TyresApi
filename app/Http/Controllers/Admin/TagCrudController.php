<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagRequest as StoreRequest;
use App\Http\Requests\TagRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class TagCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TagCrudController extends CrudController
{
    public function setup()
    {
        $this->crud->setModel("App\Models\Tag");
        $this->crud->setRoute("admin/tag");
        $this->crud->setEntityNameStrings('tag', 'tags');

        $this->crud->setColumns(['name', 'slug']);
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Tag name"
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'type' => 'text',
            'label' => "URL Segment (slug)"
        ]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
