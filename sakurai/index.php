<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>中間レイヤー作業用サイト</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/improve-condition/sakurai/css/index.css" media="all">
		<!-- link rel="alternate" media="only screen and (max-width: 640px)" href="" / -->
		<!-- link rel="alternate" media="handheld" href="" / -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="js/slidGallery.js"></script>
		<script type="text/javascript">
		$(function(){
			$('#j-slider-gallery').slidGallery({
				speed : 200,
				thum: $("#j-sliderThumb"),
				g_width : 650
			});
		});
		</script>
	</head>
	<body>
		<!-- ヘッダー -->
		<div class="header">
			<div class="header-wrap">
				<h1 class="header-title">caption</h1>
			</div>
		</div>

		<!-- ナビゲーション -->
		<div class="primaryNav">
			<ul class="primaryNav-list">
				<li class="primaryNav-list-item--select"><a href="">top</a></li><!--
				--><li class="primaryNav-list-item"><a href="">スペシャル</a></li><!--
				--><li class="primaryNav-list-item"><a href="">恋愛</a></li><!--
				--><li class="primaryNav-list-item"><a href="">ライフスタイル</a></li><!--
				--><li class="primaryNav-list-item--lastItem"><a href="">ファッション・ビューティ</a></li>
			</ul>
		</div>

		<!-- メインカラム -->
		<div class="mainContainer">
			<div class="mainColumn">
				<!-- 画像スライダー -->
				<div class="l-space galleryWrap">
					<div id="j-slider" class="galleryWrap-box">
						<ul id="j-slider-gallery">
							<li class=""><img src="http://dummyimage.com/650x330/000/fff" alt=""></li>
							<li class=""><img src="http://dummyimage.com/650x330/000/fff" alt=""></li>
							<li class=""><img src="http://dummyimage.com/650x330/000/fff" alt=""></li>
							<li class=""><img src="http://dummyimage.com/650x330/000/fff" alt=""></li>
							<li class=""><img src="http://dummyimage.com/650x330/000/fff" alt=""></li>
						</ul>
					</div>
					<div id="j-sliderThumb"></div>
				</div>

				<!-- メインコンテンツ (ラベルとサムネイルが有るリスト) -->
				<div class="l-space">
					<ul>
						<li class="parallelList2">
							<div class="parallelList2-text">
								<p class="label--health">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>									
							</div><!-- 
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<div class="parallelList2-text">
								<p class="label--love">label</p>
								<p><a class="listLinkTitle" href="">2カラム画像有り並列リスト</a></p>
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<div class="parallelList2-text">
								<p class="label--fresh">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>	
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<div class="parallelList2-text">
								<p class="label--fresh">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<div class="parallelList2-text">
								<p class="label--health">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<div class="parallelList2-text">
								<p class="label--love">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>									
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<div class="parallelList2-text">
								<p class="label--love">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<div class="parallelList2-text">
								<p class="label--fresh">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<div class="parallelList2-text">
								<p class="label--love">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>									
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<div class="parallelList2-text">
								<p class="label--health">label</p>
								<p><a class="listLinkTitle" href="">paragraph</a></p>									
							</div><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li>
					</ul>
				</div>

				<!-- 3枠並びリスト -->
				<div class="l-space">
					<ul>
						<li class="parallelList3">
							<p class="parallelList3-text"><a href="">3カラム画像有り並列リスト</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList3">
							<p class="parallelList3-text"><a href="">paragraph</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList3--flap">
							<p class="parallelList3-text"><a href="">paragraph</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList3">
							<p class="parallelList3-text"><a href="">paragraph</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList3">
							<p class="parallelList3-text"><a href="">paragraph</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList3--flap">
							<p class="parallelList3-text"><a href="">paragraph</a></p><!--
							--><a href="" class="parallelList3-thumb"><img src="img/sample.jpg" alt=""></a>
						</li>
					</ul>
				</div>

				<!-- メインコンテンツ　(画像だけのリスト) -->
				<div class="snapWrap">
					<h2 class="snapWrap-title"><img src="img/top_title.gif" alt="FASHION SNAP"></h2>
					<p class="snapWrap-linkMore"><a href="" class="iconMore">to list</a></p>
					<ul class="snapWrap-list">
						<li class="snapWrap-list-item">
							<img src="http://dummyimage.com/105x160/000/fff" alt="dummyimage">
						</li><!--
						--><li class="snapWrap-list-item">
							<img src="http://dummyimage.com/105x160/000/fff" alt="dummyimage">
						</li><!--
						--><li class="snapWrap-list-item">
							<img src="http://dummyimage.com/105x160/000/fff" alt="dummyimage">
						</li><!--
						--><li class="snapWrap-list-item">
							<img src="http://dummyimage.com/105x160/000/fff" alt="dummyimage">
						</li><!--
						--><li class="snapWrap-list-item">
							<img src="http://dummyimage.com/105x160/000/fff" alt="dummyimage">
						</li>
					</ul>
				</div>

				<!-- メインコンテンツ　(段落と画像だけのリスト) -->
				<div class="l-space">
					<h2 class="subTitle">SUB TITLE</h2>
					<ul>
						<li class="parallelList2">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li><!--
						--><li class="parallelList2--flap">
							<p class="parallelList2-text"><a class="listLinkTitle" href="">paragraph</a></p><!--
							--><a href="" class="parallelList2-thumb"><img src="img/sample.jpg" alt=""></a>
						</li>
					</ul>
					<p class="l-right">
						<a href="" class="iconMore">もっと見る</a>
					</p>
				</div>

				<!-- メインコンテンツ (テキストだけのリスト) -->
				<div class="l-space">
					<h2 class="subTitle">SUB TITLE</h2>
					<ol>
						<li class="list"><a href="" class="numbering--1">text</a></li>
						<li class="list"><a href="" class="numbering--2">text</a></li>
						<li class="list"><a href="" class="numbering--3">text</a></li>
						<li class="list"><a href="" class="numbering--4">text</a></li>
						<li class="list"><a href="" class="numbering--5">text</a></li>
						<li class="list"><a href="" class="numbering--6">text</a></li>
						<li class="list"><a href="" class="numbering--6">text</a></li>
						<li class="list"><a href="" class="numbering--8">text</a></li>
						<li class="list"><a href="" class="numbering--9">text</a></li>
						<li class="list"><a href="" class="numbering--10">text</a></li>
					</ol>
				</div>

			</div>

			<!-- レフトカラム -->
			<div class="subColumn">

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

				<!-- サブコンテンツ -->
				<div class="bannerBox">banner</div>

			</div>
		</div>

		<!-- フッター -->
		<div class="footer">
			<div class="footer-wrap">
				<ul class="l-space">
					<li class="inlineList">something</li>
					<li class="inlineList">something</li>
					<li class="inlineList">something</li>
					<li class="inlineList">something</li>
					<li class="inlineList">something</li>
				</ul>
				<p class="l-center"><small>&copy; something</small></p>
			</div>
		</div>
	</body>
</html>