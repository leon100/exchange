<?php
namespace App\Exchange;
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/classes/AbstractModel.php';
require_once __DIR__ . '/classes/Model.php';
require_once __DIR__ . '/classes/View.php';

use Rakit\Validation\Validator;
use Leon\Model;
use Leon\View;

$validator = new Validator;
$validation = $validator->make($_GET, [
    'amount'           => 'required|numeric'
]);

// then validate
$validation->validate();

if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();

    $view = ['error' => $errors->firstOfAll()];
} else {
    // validation passes
    $view = ['result' => Model::calcExchange($_GET['amount'])];
}
View::toOutput($view);
