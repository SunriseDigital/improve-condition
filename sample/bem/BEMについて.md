#BEMについて

BEM ( Block, Element, Modifier )  
http://bem.info/

Webサイトのコンポーネント化のためのフロントエンド設計方法のひとつで、  
厳格なclass名の命名ルールが特徴的な手法（方法論）

####class名の命名ルール

class名の命名ルールが決まっていないと、他の人がそのHTMLを見たときに、どこからどこまでがひとつのパーツのまとまりなのか理解できない

####パーツの流用時、JavaScriptが動かない

JavaScriptの挙動をセットにしてパーツ化されていないと、そのパーツを別の画面に流用したときに、該当するCSSとJavaScriptを正確にコピーできないことがある。そうすると、スタイルはきちんと当たっているけれど、JavaScriptが動作しないといったトラブルが起こる可能性がある。

BEMで設計することで、これらの問題を解決できるらしい。

##BEMが解決を目指すポイント

* 長期間メンテナンスできる設計で、ファーストバージョンの開発をすばやく
* チームのスケーラビリティ
* コードの再利用性

##BEMで設計する目的

* BEMはもともと、プロジェクトの成長にともなって、既存のページが変化していくことを前提として考え出された。
* BEMは多くの人がかかわり、長く運用されるプロジェクトに、特に向いている

##BEMを構成する3つの要素

BEMは、Block、Element、Modifierという3つの概念だけ理解してしまえば、  
あとはclass名の命名ルールに則って記述するだけ

###Block（ブロック）

例えば、次のようなコードの場合、searchという名前のBlockに、inputと、buttonという2つのElement（パーツ）が属していることになる。

```
<div class="search">                           <!--Block-->
  <input class="search__input" type="text">    <!--Element-->
  <input class="search__button" type="submit"> <!--Element-->
</div>
```

Blockはどこにでも置くことができ、Blockの中にBlockを含めることも可能  
CSSではBlockを入れ子にしてスタイルを指定してはいけないので注意！

###Element（エレメント）

ElementはBlockの構成要素で、そのElementが属するBlock内でのみ意味を成す。  
Elementのclass名には、必ず所属するBlock名を含める。

```
.search { ... }
.search__input { ... }
.search__button { ... }
```

Block名を含めることでclass名は冗長になるが、次のようなメリットがある。

* CSS上でセレクタを入れ子にする必要がなくなる
* ルールが統一されるため、HTMLを見ただけで、どこからどこまでがひとつのBlockなのかがわかりやすくなる

ひとつのElementはBlock内で何度も繰り返し利用できる。

###Modifier（モディファイア）

既存のBlockやElementと似ているが、見た目や動きが少しだけ違うものを作りたい場合には、新規にそれらを作るのではなく、Modifierを使う。

Modifierは、BlockやElementのバリエーションの軸や、状態（state）を表すプロパティの役割をする。

Modifierは名前（key）と値（value）を持ち、複数のModifierを同時に使用することができる。

Modifierには、Blockに対するModifierと、Elementに対するModifierがある。

####BlockのModifier

例えば、同じリストで行頭記号が2種類以上存在する場合、リストというBlockにModifierが必要。

この場合のclass名は「Block_key_value」で表す。

次のようなコードの場合、listというclass名のBlockに、typeのバリエーションがあり、それはdiscとcheckという2種類だ、ということがわかる。

```
<ul class="list  list_type_disc">
  <li class="list__item"></li>
  <li class="list__item"></li>
  ...
</ul>
 
<ul class="list  list_type_check">
  <li class="list__item"></li>
  <li class="list__item"></li>
  ...
</ul>
```

####ElementのModifier

同じメニュー内の「タブ」であっても、現在ユーザーがいるタブだけ、見栄えを変える場合は、タブというElementに対するModifierが必要。

この場合のclass名は「Element_key_value」で表す。

次のようなコードの場合、menu__itemというclass名のElementに、state（状態）が違うものがあり、それはcurrentという現在地の状態を表すものだということがわかる。

```
<ul class="menu">
  <li class="menu__item"></li>
  <li class="menu__item  menu__item_state_current"></li>
  <li class="menu__item"></li>
</ul>
```

###class名の命名ルールとセパレーター

前述のサンプルコードでは、クラス名の中に`__`というように、アンダースコアを二重に使っています。  
この`__`や、`_`、`-`は、単語と単語を区切るために使用していて、BEMではこれをセパレーターと呼ぶ。

BEMでは、誰が見てもわかるように、Block、Element、Modifierそれぞれの区切りに、一貫したセパレーターを使うことが重要とされている。

####セパレーターの種類

BEMでは、次の3種類の区切りをきちんと区別でき、それが一貫していれば、セパレーターの種類は自由としている。

* BlockとElementとの区切り
* Block（あるいはElement）とModifierとの区切りと、Modifierのkeyとvalueの区切り
* BlockやElement名を、2つ以上の単語で表す場合の単語と単語との区切り

大切なのは、クラス名を見たときに、セパレーターの種類によって、それが`BlockとElementの区切り`なのか、`Modifierの区切り`なのか、それともただの`単語の区切り`なのかが、はっきり判別できるようにすることである。

####BlockとElementの区切り

「Block`__`Element」と、区切り文字にアンダースコアを2つ繋げたものを使用する。

```
<ul class="menu">
  <li class="menu__item"></li>
  <li class="menu__item"></li>
</ul>
```

####Modifierの区切りと、Modifierのkeyとvalueの区切り

「Block`_`key`_`value」または「Element`_`key`_`value」のように、区切り文字にアンダースコア1つを使用する。

```
<ul class="list  list_type_disc">
  <li class="list__item"></li>
  <li class="list__item"></li>
  ...
</ul>
 
<ul class="menu">
  <li class="menu__item"></li>
  <li class="menu__item  menu__item_state_current"></li>
  <li class="menu__item"></li>
</ul>
```

####単語の区切り

BlockやElement名を、2つ以上の単語で表す場合は「単語`-`単語」のように、区切り文字にハイフンを使用する。

```
<div class="search-result">
  <div class="search-result__item">...</div>
</div>
```

#####キャメルケースや別種のセパレーターの利用  

単語の区切りにハイフン（ - ）を利用せず、
キャメルケース（searchResultなど）にすると、BEMのセパレーターとの区別がつきやすくなる。

```
<div class="searchResult">
  <div class="searchResult__item">...</div>
</div>
```

また、アンダースコアや連続セパレーターにこだわる必要もないため、次のように記述することもできる。

```
<div class="searchResult">
  <div class="searchResult-item">...</div>
</div>
```

どのようなセパレーターを使う場合でも、サイト内で統一されていれば問題はない。

##BEMのメリットとデメリット

###メリット

* HTMLとCSSは、いつでもデザインの変化に対応できる
* プログラマーとフロントエンドエンジニアは、お互いのコードに貢献し合える
* 皆が同じ言語でやりとりできるので、コミュニケーションが取りやすくなる

プロジェクトに関わるチームメンバー全員がBEMの考え方理解し、それぞれの立場で、間違いなくコードに反映できるかにかかっている。

###デメリット

* 独特な記法のため、BEMを知らない人から見ると、違和感を持つ人もいる
* ElementやModifierの名前が冗長になりがち

名前が冗長になりがちな点に関しては、Blockの名前をできるだけコンパクトにするしかないが、単語を省略しすぎると意味が伝わらなくなるので、それはそれで問題である

###参考

* [BEMによるフロントエンドの設計 - 基本概念とルール | CodeGrid](https://app.codegrid.net/entry/bem-basic-1)

> Written with [StackEdit](https://stackedit.io/).