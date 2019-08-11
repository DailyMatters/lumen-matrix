<?php

class MatrixTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAPIStatus()
    {
		$response = $this->call('GET', '/matrix/status');
		$this->assertEquals(200, $response->status());
    }


}
