<?php

$TEMPLATE_PATH = 'templates/default/template.tmpl';

include 'simple_html_dom.php';

$mainurls = array (
		'https://rbauto.ru/catalog/road-building-machinery/ekskavatory/',
		'https://rbauto.ru/catalog/road-building-machinery/frontalnye-pogruzchiki/',
		'https://rbauto.ru/catalog/road-building-machinery/ekskavatory-pogruzchiki/',
		'https://rbauto.ru/catalog/road-building-machinery/mini-pogruzchiki/',
		'https://rbauto.ru/catalog/road-building-machinery/avtogreydery/',
		'https://rbauto.ru/catalog/road-building-machinery/buldozery/',
		'https://rbauto.ru/catalog/road-building-machinery/road-rollers/',
		'https://rbauto.ru/catalog/road-building-machinery/teleskopicheskie-pogruzchiki/',
		'https://rbauto.ru/catalog/road-building-machinery/mini-ekskavatory/',
		'https://rbauto.ru/catalog/road-building-machinery/navesnoe-oborudovanie-dlya-spetstekhniki/',
		);
				  
$products = array(
				'brands' => array(),
				'pagess' => array(),
				'categs' => array(),
				'titles' => array(),
				'prices' => array(),
				'descrs' => array(),
				'imgsrc' => array(array()), 
				'images' => array(array()),
				'specss' => array(),
				);

$categories = array(
					'Экскаваторы',
					'Фронтальные погрузчики',
					'Экскаваторы-погрузчики',
					'Мини-погрузчики',
					'Автогрейдеры',
					'Бульдозеры',
					'Катки',
					'Мини-экскаваторы',
					'Навесное оборудование',
					);

function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = strip_tags($s); // убираем HTML-теги
  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
  $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
  return $s; // возвращаем результат
}




function getProdURLs($categoryURL) {
	global $products;
	$html = file_get_html($categoryURL, false, null, 0 );
	$prodURLs = array();
	$pid = 0;
	foreach($html->find('div.product__wrap a') as $a) {
		if($a->href != '') {
			$products['pagess'][] = 'https://rbauto.ru/'.$a->href;
			
		}
	}
	
	$html->clear();
	unset($html);
	return $products;
}

function getProdTitles($categoryURL) {
	global $products;
	$html = file_get_html($categoryURL, false, null, 0 );
	$prodURLs = array();
	$pid = 0;
	foreach($html->find('div.product__title') as $title) {
		if($title->innertext != '') {
			$titl = (string) $title->innertext;
			$products['titles'][] = $s = str_replace(array("\n", "\r"), " ", $titl);
			
		}
	}
	
	
	$html->clear();
	unset($html);
	return $products;
}

function getProdDescrs($categoryURL) {
	global $products;
	$html = file_get_html($categoryURL, false, null, 0 );
	$prodURLs = array();
	$pid = 0;
	foreach($html->find('div.product__main') as $descr) {
		if($descr->Children(2)->outertext != '') {
			
			$products['descrs'][] = $descr->Children(2)->outertext;
		}
	}
	
	$html->clear();
	unset($html);
	return $products;
}

function getProdPrice($categoryURL) {
	global $products;
	$html = file_get_html($categoryURL, false, null, 0 );
	$pid = 0;
	foreach($html->find('div[class=product__price margin-bottom-2]') as $prc) {
		if($prc != '') {
			$p = $prc->innertext;
			$products['prices'][] = $p;
		}
		else {
			$products['prices'][] = 'Цена по запросу';
		}
		
	}
	
	$html->clear();
	unset($html);
	return $products;
}


function getProdIMGs($produrl,$index) {
	global $products;
	$pn = 0;
	$html = file_get_html($produrl, false, null, 0 );
	foreach($html->find('a[itemprop=image] img') as $img) {
		
		$imgsrc[] = 'https://rbauto.ru/'.$img->src;
		$from = 'https://rbauto.ru/'.$img->src;
		$imgname = translit($products['titles'][$index]);
		$imgsave[] = 'images/products/'.$imgname.'-'.$pn.'.jpg';
		$to = 'images/products/'.$imgname.'-'.$pn.'.jpg';
		
		file_put_contents($to, file_get_contents($from));		
		
		$pn++;
	}

	$products['imgsrc'][] = $imgsrc;
	$products['images'][] = $imgsave;
	
	$html->clear();
	unset($html);
	return $products;
	
}


function getProdPrices($produrl) {
	global $products;
	
	$html = file_get_html($produrl, false, null, 0 );
	foreach($html->find('div[class=small-12 medium-6 large-5 cell data]') as $prce){
		$price = $prce->Children(1)->outertext;		// основные хар-ки
		$products['prices'][] = $price;
	}
	$html->clear();
	unset($html);
	return $products;
}

function getProdDesc($produrl) {
	global $products;
	
	$html = file_get_html($produrl, false, null, 0 );
	foreach($html->find('div[class=data__block]') as $base_data){
		$short_data = $base_data->outertext;      	  // основные хар-ки
		$products['descrs'][] = $short_data;
	}
	$html->clear();
	unset($html);
	return $products;
}

function getProdSpecs($produrl) {
	global $products;
	
	$html = file_get_html($produrl, false, null, 0 );
	foreach($html->find('table') as $base_data){
		$short_data = $base_data->outertext;		// основные хар-ки
		$products['specss'][] = $short_data;
	}
	$html->clear();
	unset($html);
	return $products;
}


function array_filter_recursive($input) 
{ 
   foreach ($input as &$value) 
    { 
      if (is_array($value)) 
      { 
         $value = array_filter_recursive($value); 
      } 
   }     
   return array_filter($input); 
} 

function createSiteDirs($categoryURL) {
	
		
		foreach($products['categs'] as $dir) {
			$directoryName = 'catalog/'.$dir;
			//Check if the directory already exists.
			if(!is_dir($directoryName)){
				//Directory does not exist, so lets create it.
				mkdir($directoryName, 0777, true);
			}
		
		}
		return $products;
}

function createProductPages($prods) {
		// шаблонизатор
		global $TEMPLATE_PATH;
		global $products;
		
		$orderbutton = '<button class="add-to-cart" data-target="#askModal">Заказать</button>';
		$lizingbutton = '<button type="button" class="btn btn-success btn-lg button margin-right-3 button__green x-button-sale pull-right" data-toggle="modal" data-target="#orderModal"><i class="fa fa-cart-plus" aria-hidden="true"></i>Купить в лизинг</button>';
		$askbutton = '<button class="add-to-cart" data-target="#askModal">Заказать</button>';
		$pricebutton = '<button type="button" class="btn btn-info btn-lg x-button-sale pull-right" data-toggle="modal" data-target="#priceModal">Уточнить цену</button>';

		for ($i = 0; $i < $prods; $i++) {

			$title = strip_tags($products['titles'][0]).' - купить в Москве, цена, характеристики, фото | каталог техники';
			$prod_title = strip_tags($products['titles'][0]);
			$prod_price = $products['prices'][0];
			$prod_descr = $products['descrs'][0];
			$prod_specs = $products['specss'][0];

			foreach($products['images'][1] as $img) {
				$prod_phgal .= '<img src="'.$img.'" /><br>';
			}
		
			$file = file_get_contents($TEMPLATE_PATH); // путь к шаблону
			
			$file=str_replace('{title}',$title,$file);
			$file=str_replace('{prod_title}',$prod_title,$file); // обьявляем из каких переменых брать информацию
			$file=str_replace('{prod_price}',$prod_price,$file); // обьявляем из каких переменых брать информацию
			$file=str_replace('{prod_phgal}',$prod_phgal,$file); // обьявляем из каких переменых брать информацию
			$file=str_replace('{prod_descr}',$prod_descr,$file); // обьявляем из каких переменых брать информацию
			$file=str_replace('{askbutton}',$askbutton,$file);
			$file=str_replace('{orderbutton}',$orderbutton,$file);
			$file=str_replace('{prod_specs}',$prod_specs,$file); // обьявляем из каких переменых брать информацию
			
			preg_match('/https:\/\/rbauto\.ru\/catalog\/road-building-machinery\/(.+)\//', $products['pagess'][0], $matches);
			$dir = $matches[1];
			$pagepath = 'catalog/'.$dir;
			$pagename = translit($prod_title);

			//Check if the directory already exists.
			if(!is_dir($parepath)){
				//Directory does not exist, so lets create it.
				mkdir($pagepath, 0777, true);
			}
		
		}

			if (!file_put_contents($pagepath, $file)) {
				die('Не удалось записать в файл...');
			}
		}
}

foreach($mainurls as $url) {
	getProdURLs($url);
	getProdTitles($url);
}

for ($i = 0; $i < 3; $i++) {
	getProdPrices($products['pagess'][$i]);
	getProdDesc($products['pagess'][$i]);
	getProdSpecs($products['pagess'][$i]);
	getProdIMGs($products['pagess'][$i],$i);
}






$prod = array_filter_recursive($products);

createProductPages(2);

echo '<pre>'; 
print_r($prod);
echo '</pre>'; 


?>