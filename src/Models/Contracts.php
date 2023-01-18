<?php

namespace SaltContract\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Schema;

use SaltLaravel\Models\Resources;

use SaltLaravel\Traits\ObservableModel;
use SaltLaravel\Traits\Uuids;

class Contracts extends Resources {
    use Uuids;
    use ObservableModel;

    protected $filters = [
        'default',
        'search',
        'fields',
        'relationship',
        'withtrashed',
        'orderby',
        // Fields table provinces
        'id',
        'subject',
        'description',
        'start_date',
        'end_date',
        'type_id',
        'client_id',
        'value_contract',
        'base_currency',
        'exchange_currency',
        'exchange_value',
        'address_alternative',
        'note',
        'status',
        'data',
    ];

    protected $rules = array(
        'subject' => 'required|string',
        'description' => 'required|string',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date',
        'type_id' => 'required|string',
        'client_id' => 'required|string',
        'value_contract' => 'required|float',
        'base_currency' => 'nullable|string|max:3',
        'exchange_currency' => 'nullable|string|max:3',
        'exchange_value' => 'required|float',
        'address_alternative',
        'note' => 'nullble|string',
        'data' => 'nullable|json',
        'status' => 'required|in:draft,active',
    );

    protected $auths = array (
        'index',
        'store',
        'show',
        'update',
        'patch',
        'destroy',
        'trash',
        'trashed',
        'restore',
        'delete',
        'import',
        'export',
        'report'
    );

    protected $forms = array();
    protected $structures = array();
    protected $searchable = array(
        'subject',
        'description',
        'start_date',
        'end_date',
        'type_id',
        'client_id',
        'value_contract',
        'base_currency',
        'exchange_currency',
        'exchange_value',
        'address_alternative',
        'note',
        'status',
        'data',
    );

    protected $fillable = array(
        'subject',
        'description',
        'start_date',
        'end_date',
        'type_id',
        'client_id',
        'value_contract',
        'base_currency',
        'exchange_currency',
        'exchange_value',
        'address_alternative',
        'note',
        'status',
        'data',
    );
}
