<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Columns
    |--------------------------------------------------------------------------
    |
    | These are the columns to be displayed in the user table.
    |
    */
    'users_columns' => [
        'id',
        'name',
        'email',
        'email_verified_at',
    ],

    'User_unique_column' => 'email',  // Unique column format: ModelName_unique_column
    'User_SessionKey' => 'user_columns', // Session key format: ModelName_SessionKey
    // 'User_has_edit_option' => true, // By default it is true

    /*
    |--------------------------------------------------------------------------
    | Product Columns
    |--------------------------------------------------------------------------
    |
    | These are the columns to be displayed in the product table.
    |
    */
    'product_columns' => [
        'id',
        'fname',
        'lname',
        'email',
    ],

    'Product_unique_column' => 'email', // Unique column format: ModelName_unique_column
    'Product_SessionKey' => 'product_columns', // Session key format: ModelName_SessionKey
    'Product_has_edit_option' => true,

    /*
    |--------------------------------------------------------------------------
    | Customer Columns
    |--------------------------------------------------------------------------
    |
    | These are the columns to be displayed in the customer table.
    |
    */
    'customer_columns' => [
        'id',
        'first_name',
        'last_name',
        'user_name',
        'address',
        'email',
        'image',
    ],

    'Customer_unique_column' => 'user_name', // Unique column format: _unique_column
    'Customer_SessionKey' => 'customer_columns', // Session key format: ModelName_SessionKey
    'Customer_has_image' => 'image', // Session key format: ModelName_SessionKey

    /*
    |--------------------------------------------------------------------------
    | Rows Per Page
    |--------------------------------------------------------------------------
    |
    | These are the options for the number of rows per page in pagination.
    |
    */
    'rowsPerPage' => [10, 20, 30, 50, 100, 200],
];

/*
|--------------------------------------------------------------------------
| Warning
|--------------------------------------------------------------------------
|
| We have not used the blacklist column, so please manage confidence columns
| from your side to ensure that those columns are not included in this configuration.
|
*/
