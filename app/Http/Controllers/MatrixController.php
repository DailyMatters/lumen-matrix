<?php

namespace App\Http\Controllers;

class MatrixController extends Controller
{
    /**
     * Checks if the API is working correctly.
     *
     * @return response
     */
    public function showWorkingAPI()
    {
		return response()->json('API Working Correctly.', 200)
			->header('Content-Type', 'text/plain');
    }

}
