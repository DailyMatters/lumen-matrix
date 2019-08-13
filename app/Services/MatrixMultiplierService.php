<?php

namespace App\Services;

use App\Exceptions\MatrixSizeException;

class MatrixMultiplierService {

	//Rows represents matrix 1 and Columns represents matrix2
	public function multiply(array $rows, array $columns): array {
		$rowCount = count($rows);
		$columnCount = count($columns[0]);
		$innerCols = count($columns);
		
		if ( $innerCols != count($rows[0]) ) {
			throw new MatrixSizeException();
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
    return $result;
	}

}
