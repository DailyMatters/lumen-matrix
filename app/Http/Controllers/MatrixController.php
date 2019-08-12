<?php

namespace App\Http\Controllers;

use App\Services\MatrixMultiplierService;
use App\Services\ConvertToAlphabetService;
use Illuminate\Http\Request;

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

	public function multiplyMatrix(Request $request) {

		$parsed_request = json_decode($request->getContent(), true);

		$multiplyService = new MatrixMultiplierService();
		$result = $multiplyService->multiply($parsed_request['m1'], $parsed_request['m2']);

		$result = $this->calculateAlphabet($result);

		return response()->json($result, 200);
	}

	private function calculateAlphabet(array $outterArray): array {
	
		$res = [];

		foreach($outterArray as $innerArray) {
			foreach($innerArray as $number){
				$converterService = new ConvertToAlphabetService();
				$res[] = $converterService->convert($number);
			}
		}

		return $res;
	}
}
