<?php

/**
 * web scraper class
 */
class webScraper {

     static function main()
	{
         $url = 'http://www.sainsburys.co.uk/webapp/wcs/stores/servlet/CategoryDisplay?listView=true&orderBy=FAVOURITES_FIRST&parent_category_rn=12518&top_category=12518&langId=44&beginIndex=0&pageSize=20&catalogId=10137&searchTerm=&categoryId=185749&listId=&storeId=10151&promotionId=#langId=44&storeId=10151&catalogId=10137&categoryId=185749&parent_category_rn=12518&top_category=12518&pageSize=20&orderBy=FAVOURITES_FIRST&searchTerm=&beginIndex=0&hideFilters=true';

		/* Initialize a curl session */
        $ch = curl_init();

        /* This value is the URL which we are sending the request to */
		curl_setopt($ch, CURLOPT_URL, $url);

		/* Tell cURL to return the output */
		curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_ENCODING, 'ISO-8859-1'); 
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)');

		$headers = array();
		$headers[] = 'Host: www.sainsburys.co.uk';
		$headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0';
		$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
		$headers[] = 'Accept-Language: en-gb,en;q=0.5';
		$headers[] = 'Accept-Encoding: gzip, deflate';
		$headers[] = 'Cookie: Apache=10.173.10.10.1440869021311022; JSESSIONID=0000Z6sXZTUbO7qeFk4C7ybn1gB:17cj27o02; WC_PERSISTENT=uqeP%2ffmzbFKOmyrnlymu2HgpCx0%3d%0a%3b2015%2d08%2d29+18%3a23%3a41%2e317%5f1440869021311%2d41626%5f10151; SESSION_COOKIEACCEPT=true; WC_SESSION_ESTABLISHED=true; WC_ACTIVEPOINTER=44%2c10151; BIGipServera-eco-www-fltc-pool-p_80=1888201994.20480.0000; sbrycookie2=L3bWXaN5Q; sbrycookie1=630263751; TS017d4e39=012af522e370ffb89caa9f26bf6bddd80dbf292664a696b17ac5c79fe477343074a307ed74998500d7037af0fcc4ec95d4718098cb0ffb8e2ae0a592d2e94fe63816432dfaa051c275d9cefbc5b5d5162c1e3d395f94ca4f65e97a24178698db4ab1144172a525e69357ed8c6d980bebbdf8f2b498ddf8b5961109d82473f00cd25ce728787af7949b3d8b67ea1a6454e441fc88cbb7d962504a1ba290e5058c55e718e506dea00c9a5e8938c5ffb595e42c550375e7438cd70c1bfee53cf35e944105eb3d1bff7d40f648e58b5ab89d77bbbc34e9ac404dd6143f69cd84993ae80aa4dd878396f8ca0a05ea8bf9085f62dc7a0e4b4b0915b81ead63b831510c7d518ad15cab547e58093724d8f8dc9e7a24898b1f5b061ee5888fa939159dfbc7dc0dba3b; LIST_VIEW=true; BIGipServera-eco-www-ltc-pool-p_80=1720429834.20480.0000; bt_sc_serialize=14408654015002617064; oa_products=|; oa_visited=|; oa_revenueincdel=|; oa_time=|; loginClicked=|; bt_espot_click=; bt_product_click=; s_cc=true; c=undefined109.94.142.1109.94.142.1; s_ev27=%5B%5B%27Direct%2520Load%27%2C%271440865401777%27%5D%2C%5B%27Other%2520Referrers%27%2C%271440879666791%27%5D%5D; s_vnum=1441062000779%26vn%3D3; s_sq=; _msuuid_529av24112=99BBB9B7-A4CF-4E39-ACC5-AD1BB4189287; gpv_url=http%3A%2F%2Fwww.sainsburys.co.uk%2Fwebapp%2Fwcs%2Fstores%2Fservlet%2FTopCategoriesDisplayView%3FcatalogId%3D10122%26langId%3D44%26storeId%3D10151; s_invisit=true; gpv_page=groceries%3Ahomepage; bt_espot_var=; bt_productclickfrom=; TS017d4e39_77=08c9268e8fab2800249a610a78dd7278cbc0e950167a1920f3643b0edf7f3f56be9ba449707c994c71c3287c86e94022083333148582380005b5099fe98cd956dd68112c3e26cb72c38e35cb9d1e53f6a757f65fcd0928e650190945f0f85a4020ab179a91c42896e08efb5ef0e9a2a2; REFERRER=http%3a%2f%2f109%2e94%2e142%2e1%2f; WC_USERACTIVITY_146251472=146251472%2c10151%2cnull%2cnull%2cnull%2cnull%2cnull%2cnull%2cnull%2cnull%2ct2r9vlYo5Pu8hkJV6UXEjhAKlYA1gxwK90lZmTb7p%2bP%2bhPmniRwC9Yo1iDj1clmsf9OrvT1PTjQ3%0axWv6mCtzesq%2fHHZ%2fvyXjnM1FPcIWTFScsS8XwT%2f7bpS4cx%2bsRjki9ABJ1ZPjsxGT6HDyPzOLzeJB%0azDKvt1le5sAXshJL4JDmhdieZZKfP3HB6xdJDHdAGjGbOhPZh8EpNnTJf5aF1g%3d%3d';
		$headers[] = 'Connection: keep-alive';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $htmlcode = curl_exec($ch);
        if (! $htmlcode) {
            echo "Error number - " . curl_errno($ch);
            echo "Error - " . curl_error($ch);
            exit;
        }

		/* Load HTML */
		$dom = new DOMDocument();
		@$dom->loadHtml($htmlcode);

		$links = array();
		$xpath = new DOMXPath($dom);

		/* Get the closest HTML context to do more efficient in the foreach */
		$entries = $xpath->query("//div[@class='product ']");
		$total = 0;
		$results = array();
		foreach ($entries as $entry) {

            //Get HTML title
            $a = $xpath->query("div//a", $entry);
            $node = $a->item(0)->nodeValue;
            $text = trim(preg_replace("/[\r\n]+/", " ", $node));

            /* HTML Link */
            $link = trim(preg_replace("/[\r\n]+/", " ", $a->item(0)->getAttribute("href")));

            curl_setopt($ch, CURLOPT_URL, $link);
            $linked_html = curl_exec($ch);
            if (!$linked_html) {
                echo "ERROR: " . curl_error($ch);
                exit;
            }

            /* Get the size in kb of the linked HTML without assets */
            $size = round(curl_getinfo($ch, CURLINFO_SIZE_DOWNLOAD) / 1024, 2) . "kb";


            $dom_linked_html = new DOMDocument();
            @$dom_linked_html->loadHtml($linked_html);

            $xpath_linked_html = new DOMXPath($dom_linked_html);
            $node_description = $xpath_linked_html->query("//div[@class='productText']//p");

            if (! isset($node_description->item(0)->nodeValue)) {

                $node_description = $xpath_linked_html->query("//div[@class='itemTypeGroupContainer productText']");
                $description = trim(preg_replace("/[\r\n]+/", " ", $node_description->item(0)->nodeValue));
            } else {

                $description = trim(preg_replace("/[\r\n]+/", " ", $node_description->item(0)->nodeValue));
            }


            $p = $xpath->query('div//p[@class="pricePerUnit"]', $entry);
            $price = substr(trim(preg_replace("/[\r\n]+/", " ", $p->item(0)->nodeValue)), 2, 4);
            $total += $price;


            $results[] = array('title' => $text, 'size' => $size, 'unit_price' => $price, 'description' => $description);
        }


		curl_close($ch);


		//echo json_encode(array( 'results' => $results, 'total' => $total), JSON_PRETTY_PRINT);
		return json_encode(array( 'results' => $results, 'total' => $total), JSON_PRETTY_PRINT);
	}
        
}
