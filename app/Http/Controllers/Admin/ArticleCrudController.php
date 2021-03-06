<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleCrudController extends \Backpack\NewsCRUD\app\Http\Controllers\Admin\ArticleCrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Article");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('article', 'Bài viết');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Status',
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Title',
        ]);
        $this->crud->addColumn([
            'name' => 'featured',
            'label' => 'Featured',
            'type' => 'check',
        ]);
        $this->crud->addColumn([
            'label' => 'Category',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "Backpack\NewsCRUD\app\Models\Category",
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField([    // TEXT
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
            'placeholder' => 'Your title here',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            'hint' => 'Will be automatically generated from your title, if left empty.',
            // 'disabled' => 'disabled'
        ]);

        $this->crud->addField([    // TEXT
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
            'value' => date('Y-m-d'),
        ], 'create');
        $this->crud->addField([    // TEXT
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date',
        ], 'update');
        $this->crud->addField([   // Textarea
            'name'  => 'desc_short',
            'label' => 'Summary',
            'type'  => 'textarea',
            'placeholder' => 'Nhập mô tả ngắn để hiển thị thông tin ngắn',
        ]);
        $this->crud->addField([    // WYSIWYG
            'name' => 'content',
            'label' => 'Content',
            'type' => 'ckeditor',
            'placeholder' => 'Your textarea text here',
        ]);
        $this->crud->addField([    // Image
            'name' => 'image',
            'label' => 'Image 500x287 (Featured item 836x288)',
            'type' => 'browse',
        ]);
        $this->crud->addField([    // SELECT
            'label' => 'Category',
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "Backpack\NewsCRUD\app\Models\Category",
        ]);
        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
            'label' => 'Tags',
            'type' => 'select2_multiple',
            'name' => 'tags', // the method that defines the relationship in your Model
            'entity' => 'tags', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => "Backpack\NewsCRUD\app\Models\Tag", // foreign key model
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
        ]);
        $this->crud->addField([    // CHECKBOX
            'name' => 'featured',
            'label' => 'Featured item',
            'type' => 'checkbox',
        ]);

        $this->crud->enableAjaxTable();
    }
}
