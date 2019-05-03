<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CustomerInfoRequest as StoreRequest;
use App\Http\Requests\CustomerInfoRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;

/**
 * Class CustomerInfoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class CustomerInfoCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\CustomerInfo');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/customerinfo');
        $this->crud->setEntityNameStrings('customerinfo', 'Danh sách khách hàng');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->crud->addColumn([
            'name' => 'id',
            'label' => 'ID',
        ]);
        $this->crud->addColumn([
            'name' => 'full_name',
            'label' => 'Tên',
        ]);
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
        ]);
        $this->crud->addColumn([
            'name' => 'phone',
            'label' => 'Phone',
        ]);
        $this->crud->addColumn([
            'name' => 'address',
            'label' => 'Địa chỉ',
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Trạng thái',
            'type' => 'check',
        ]);
        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
            'name' => 'full_name',
            'label' => 'Tên',
            'type' => 'text',
            'attributes' => ['disabled' => 'disabled']
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'email',
            'label' => 'Email',
            'type' => 'text',
            'attributes' => ['disabled' => 'disabled']
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'phone',
            'label' => 'Phone',
            'type' => 'text',
            'attributes' => ['disabled' => 'disabled']
        ]);
        $this->crud->addField([    // TEXT
            'name' => 'address',
            'label' => 'Địa chỉ',
            'type' => 'text',
            'attributes' => ['disabled' => 'disabled']
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => 'Đã liên hệ',
            'type' => 'checkbox',
            'checked' => true
        ]);
        // TODO: remove setFromDb() and manually define Fields and Columns
        $this->crud->setFromDb();

        // add asterisk for fields that are required in CustomerInfoRequest
        $this->crud->enableAjaxTable();
        $this->crud->denyAccess('delete');
        $this->crud->denyAccess('create');
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
