<?
	class LadyPark {
		function getColorFromFile() {
			$colorCode = "#A1F779";
			$fileName = "stock/ladypark.txt";
			$colorCode = file_get_contents($fileName);
			return $colorCode;
		}
		function setColorToFile($colorCode) {
			$fileName = "stock/ladypark.txt";
			file_put_contents($fileName, $colorCode);
		}
	}
?>