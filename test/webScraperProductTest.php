<?php
require_once 'webScraperProduct.php';
require_once 'src/webScraper.php';

class webScraperProductTest extends PHPUnit_Framework_TestCase
{
    /* Check the sum of the products is the same as in total */
    public function testFindSum()
    {

        $result = webScraper::main();
        $array = json_decode($result, true);
        $inputs = $array['results'];
        $total = $array['total'];

        $webScraperProduct = new webScraperProduct($inputs);
        $this->assertEquals($total, $webScraperProduct->findTotal());
    }

}
