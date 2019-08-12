<?php

namespace App\Services;

class MatrixMultiplierService {

	//Rows represents matrix 1 and Columns represents matrix2
	public function multiply(array $rows, array $columns): array {
		$rowCount = count($rows);
		$columnCount = count($columns[0]);
		$innerCols = count($columns);
		//This needs to be changed to throw an exception
		if ( $innerCols != count($rows[0]) ) {
			print("ERROR: need to have inner size of matrices match.\n");
			print("     : trying to multiply a ".count($rows)."x".count($rows[0])." by a ".count($columns)."x".count($columns[0])." matrix.\n");
			print("\n");
			exit(1);
		 }

		$result = array();
		for($i=0;$i< $rowCount; $i++) { 
			$result[$i] = array(); 
		}

		// multiplication here
		for($ri=0;$ri<$rowCount;$ri++) {
			for($ci=0;$ci<$columnCount;$ci++) {
				$result[$ri][$ci] = 0.0;
				for($j=0;$j<$innerCols;$j++) {
					$result[$ri][$ci] += $rows[$ri][$j] * $columns[$j][$ci];
				}
			}
		}
	//print_r($result);
    return $result;
	}

}
