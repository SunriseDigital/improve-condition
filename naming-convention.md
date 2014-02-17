命名規則について
=================

メンテナンス性を良くする為に、以下の命名規則を設けます。  
ここの内容は[OOCSS](http://oocss.org/)、  
[smacss](http://smacss.com/)の考え方を基にまとめてます。

##IDの使用について

スタイルシートにて、IDは使用不可とします。  
ユニークな存在としての利用は出来ますが、スタイルの為に使用してはいけません。  

###CSSのセレクタにIDを使用しない理由

 * セレクタをclassに限定する事で汎用的なスタイルを実現できメンテナンス性も高めることができる
 * IDを不可にする事でスタイル適用の優先度を明確化できる（メンテナンス性アップ）
  * !important > インラインCSS > （※ID） > class > 要素 > 全称セレクタ(*)
 * IDの使用を機能面（javascript）に特化する事で「装飾」と「機能」を分離できる

```text
【例1_1】
(☓) #main {}

(◯) .main {}
```

##構成要素

__【コンポーネントとサブコンポーネント】__

大きなレイアウトに関係する様な部分をコンポーネント(構成要素)と呼ぶことにします。  
例えば、ヘッダー・フッター・サイドカラム・メインカラム・各主要コンテンツ等です。  
親要素をコンポーネントとした場合、子要素に当たる部分をサブコンポーネント(下位構成要素)と呼ぶことにします。

コンポーネントとサブコンポーネントの指定は以下の様に記述します。

```text
【書式】
コンポーネント：.component {}
サブコンポーネント：.component-subcomponent {}
```
※次の点に気をつけてください。

 * 要素を指定しない。
 * ネストさせない。
 * 単語と単語を繋ぐ場合はハイフン(-)を使用する。
 * 単語が複数で一つの意味を成している場合はキャメライズする。

いままでは例2_1の様な形式で書いていたと思います。  
これだと粒度が荒い状態です。  
「#main-container」有りきで構成されています。  
この書き方をしていると、どんどんネストしてメンテナンス性が悪くなります。
```text
【例2_1】
div#main-container {
  ...
}

div#main-container p.heading {
  ...
}

div#main-container ul.list {
  ...
}

div#main-container ul.list li.item {
  ...
}
```

これからは次の記した形式で書いていきましょう。  
これは粒度が細かい状態です。各構成要素が独立しています。  
そのため、「.mainContainer-heading」や「.mainContainer-list」は  
「.mainContainer」に依存しませんので、メンテナンス性が良くなります。
```text
【例2_2】
.mainContainer {
  ...
}

.mainContainer-heading {
  ...
}

.mainContainer-list {
  ...
}

.mainContainer-list-item {
  ...
}
```


__【モジュールとサブモジュール】__

再利用可能な部品をモジュールと呼ぶことにします。  
例えば、ボタン・モーダル等です。  
親要素をモジュールとした場合、子要素に当たる部分をサブモジュールと呼ぶことにします。

モジュールとサブモジュールの指定は以下の様に記述します。

```text
【書式】
モジュール：.module {}
サブモジュール：.module-submodule {}
```

```text
【例3_1】

.modalWindow {
  ...
}

.modalWindow-content {
  ...
}
```

再利用可能な部品として分かりやすいモノのひとつにボタンがありますが、  
OOCSSだと例3_2の様な形式で書きます。  
共通の内容を継承して、個々のスキン(装飾)を適用するといった形です。
```text
【例3_2】

<a href="#" class="btn btn--primary">primary</a>
<a href="#" class="btn btn--success">success</a>

.btn {
  border:1px solid #000;
  padding: 5px;
  color: #fff;
  border-radius: 10px;
}

.btn--primary {
  background: #f00;
}

.btn--success {
  background: #0f0;
}
※「--」の部分については後述します。
```

例3_2の内容をSassで書くと、もっとコンパクトに書くことが出来ます。  
次(例3_3)は、extendとplaceholder selectorを使った方法を見てみましょう。  
継承する抽象的なクラスを出力させないように出来ます。
```text
【例3_3】

<a href="#" class="btn--primary">primary</a>
<a href="#" class="btn--success">success</a>

%btn {
  border:1px solid #000;
  padding: 5px;
  color: #fff;
  border-radius: 10px;
}

.btn--primary {
  @extend %btn
  background: #f00;
}

.btn--success {
  @extend %btn
  background: #0f0;
}
※「--」の部分については後述します。
```

##修飾

各コンポーネントやモジュールを修飾する場合はハイフン「-」は使いません。  
「--」を使用します。「--」で繋いだ修飾子をモディファイアと呼ぶことにします。  
例えば、各要素に複数の種類が存在する場合です。
上記、例3_2や例3_3の`btn--primary``btn--success`がこれに該当します。
※「--」で繋いだ内容が階層になっていない事に注目してください。

```text
【書式】
.component--modifier {}　.component-subcomponent--modifier {}
.module--modifier {}　.module-submodule--modifier {}
```

```text
【例4_1】
.mainColumn-list-item--odd {}
.mainColumn-list-item--even {}
```

##状態

状態を表す時はis-を使用してください。
例えば、グローバルナビゲーションで
現在のページが分かるように色がついている状態等です。

```text
【書式】
is-名詞(形容詞)
```
```text
【例5_1】
.is-current
.is-active
.is-hidden
.is-invisible
```