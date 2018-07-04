<?php
 
 
    
$html = <<<'EOF'
<html>
	<body>
		<h1>Foo</h1>
        <div id="content">
            <div class="external">Evento<br><img class="externo-item" src="http://teste117.minharadio.fm/imagens/9dcb1110f28881ff22beb2e9d2c39da1.jpg" data-id="7" data-type="evento" data-mce-src="http://teste117.minharadio.fm/imagens/9dcb1110f28881ff22beb2e9d2c39da1.jpg"></div>
            <div class="external">Album<br><img class="externo-item" src="http://teste117.minharadio.fm/imagens/9dcb1110f28881ff22beb2e9d2c39da1.jpg" data-id="17" data-type="album" data-mce-src="http://teste117.minharadio.fm/imagens/9dcb1110f28881ff22beb2e9d2c39da1.jpg"></div>
            <div class="external">Videos<br><img class="externo-item" src="http://teste117.minharadio.fm/imagens/25f3dbd8ff6854ed832e8c368352c4c8.jpg" data-id="25" data-type="videos" data-mce-src="http://teste117.minharadio.fm/imagens/25f3dbd8ff6854ed832e8c368352c4c8.jpg"></div>              
			<div class="foo" id="xx">
				<div><img class="fooimage" src="http://foo.com/bar.png" /></div>
				<p class="description">Foo bar</p>
			</div>
			<div class="foo">
				<div><img class="fooimage" src="http://foo.com/baz.png" /></div>
				<p class="description">Baz bat</p>
			</div>
		</div>
	</body>
</html>
EOF;
    $dom = new DOMDocument();
    $dom->loadHTML($html);

    $xpath = new DomXpath($dom);
    $imgs  = $xpath->query('//*[@class="externo-item"]');

    foreach($imgs as $img)
    {
        echo  $img->getAttribute('data-id') .' -  ' . $img->getAttribute('data-type') . '<br>' . PHP_EOL;
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';

    $dom = new DOMDocument();
    $dom->loadHTML($html);

    $xpath = new DomXpath($dom);
    $imgs  = $xpath->query('//*[@class="fooimage"]');    

    foreach( $imgs as $val){
        echo $val->getAttribute('src');
    }
    

?>

 
 