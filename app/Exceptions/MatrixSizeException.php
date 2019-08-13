<?php

namespace App\Exceptions;

class MatrixSizeException extends \Exception {

	public function render()
    {
        return response(['error' => 'Invalid Matrix Sizes, unable to do calculation.'], 422);
    }

}
