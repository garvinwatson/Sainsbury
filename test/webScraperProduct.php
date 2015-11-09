<?php
/**
 * Class webscraperproduct
 */
class webScraperProduct
{
    private $inputArray;

    /**
     * @param $inputArray
     */
    public function __construct($inputArray = null)
    {
        $this->inputArray = $inputArray;
    }

    /**
     * Returns the sum of products
     * @return array
     */
    public function findTotal()
    {
        $arrayGroups = array();

        $sum = 0;

        foreach ($this->inputArray as $element) {
          $sum += $element['unit_price'];
        }

        return $sum;
    }

}
