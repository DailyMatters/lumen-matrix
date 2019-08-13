<?php

use App\Services\MatrixMultiplierService;
use App\Exceptions\MatrixSizeException;

class MatrixMultiplierServiceTest extends TestCase {

    public function testInvalidMatrixSizeException()
	{
		$this->expectException(App\Exceptions\MatrixSizeException::class);

		$service = new MatrixMultiplierService();

		$m1 = array(array(2,2), array(2,3,4));
		$m2 = array(array(1),array(5));

		$service->multiply($m2, $m1);
    }


}
