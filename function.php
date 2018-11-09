<?php 
//注册菜单
function fairytales_setup() {
	register_nav_menus(
		array(
			'primary' => 'FTmenu',
		)
	);
}
add_action( 'after_setup_theme', 'fairytales_setup' );

//设置文章作者页面到指定页面。

//设置文章作者页面到指定页面

//随机背景图函数
function lz_get_Randombg() {
	$lz_post_data = get_post($post->ID, ARRAY_A);
    $lz_post_slug = $lz_post_data['post_name'];
	global $post;
	$lz_post_id = $post -> ID;
	$lz_api_url = 'https://img.langzi.xin/bg.php?return=';
	$lz_return_url = $lz_api_url.$lz_post_slug;
	return $lz_return_url;
}

//主题移植函数
function str_replace_limit($search,$replace,$subject,$limit=1) {
	if (is_array($search)) {
		foreach ($search as $k=>$v) {
			$search[$k]='`'.preg_quote($search[$k],'`').'`';
		}
	} else {
		$search='`'.preg_quote($search,'`').'`';
	}

	return preg_replace($search,$replace,$subject,$limit);
}
function post_tor($content){
	$tor=array();
	$f='';
	preg_match_all('/<h[3-4]>(.*?)<\/h[3-4]>/', $content, $tor_i);
	$num=count($tor_i[0]);
	for ($i=0; $i < $num; $i++) { 
		$n=$i+1;
		$a='<a href="#anchor-'.$n.'">'.$tor_i[0][$i].'</a>';
		$f=$f.$a;
	}
	$f=str_replace('<h3>','<span class="tori">',$f);
	$f=str_replace('</h3>','</span><br>',$f);
	$f=str_replace('<h4>','<span class="torii">',$f);
	$f=str_replace('</h4>','</span><br>',$f);
	if ($num==0) {
		return '';
	} else {
		return $f;
	}
}
//主题移植函数

//移除菜单的多余CSS选择器
function uazoh_css_attributes_filter($var) {
return is_array($var) ? array() : '';
}
add_filter('nav_menu_css_class', 'uazoh_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'uazoh_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'uazoh_css_attributes_filter', 100, 1);
add_filter('page_item_css_class', 'uazoh_css_attributes_filter', 100, 1);
