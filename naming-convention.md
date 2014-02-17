命名規則について
=================

メンテナンス性を良くする為に、
以下の命名規則を設けます。

##IDの使用について

IDは使用不可とします。  
なぜなら、アンカーリンクやjavascriptの為に場所を空けておく為です。  
ユニークな存在としての利用は出来ますが、スタイルの為に使用してはいけません。  

###CSSのセレクタにIDを使用しない理由

 * セレクタをclassに限定する事で汎用的なスタイルを実現できメンテナンス性も高めることができる
 * IDを不可にする事でスタイル適用の優先度を明確化できる（メンテナンス性アップ）
  * !important > インラインCSS > （※ID） > class > 要素 > 全称セレクタ(*)
 * IDの使用を機能面（javascript）に特化する事で「装飾」と「機能」を分離できる

```text
(☓)
#main {}

(◯)
.main {}
```

##構成要素

__【コンポーネントとサブコンポーネント】__

大きなレイアウトに関係する様な部分をコンポーネント(構成要素)と呼ぶことにします。  
例えば、ヘッダー・フッター・サイドカラム・メインカラム・各主要コンテンツ等です。  
親要素をコンポーネントとした場合、子要素に当たる部分をサブコンポーネント(下位構成要素)と呼ぶことにします。

コンポーネントとサブコンポーネントの指定は以下の様に記述します。

```text
コンポーネント：.component {}
サブコンポーネント：.component-subcomponent {}
```
※次の点に気をつけてください。

 * 要素を指定しない。
 * ネストさせない。
 * 単語と単語を繋ぐ場合はハイフン(-)を使用する。
 * 単語が複数で一つの意味を成している場合はキャメライズする。

↓いままではこんな感じで書いていたと思います。  
　粒度が荒い状態です。  
　「#main-container」有りきで構成されています。  
　この書き方をしていると、どんどんネストしてメンテナンス性が悪くなります。  
```text
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

↓これからはこんな感じで書いていきましょう。  
　粒度が細かい状態です。各構成要素が独立しています。  
　そのため、「.mainContainer-heading」や「.mainContainer-list」は  
　「.mainContainer」に依存しませんので、メンテナンス性が良くなります。
```text
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
モジュール：.module {}
サブモジュール：.module-submodule {}
```

例)  
```text
.modalWindow {
  ...
}

.modalWindow-items {
  ...
}
```

例)  
```text
.btn {
  ...
}

.btn btn--primary {
  ...
}

.btn btn--success {
  ...
}

※「--」については後述します。
```

##修飾

各コンポーネントやモジュールを修飾する場合はハイフン「-」は使いません。
「--」を使用します。「--」で繋いだ修飾子をモディファイアと呼ぶことにします。
例えば、各要素に複数の種類が存在する場合です。

「--」で繋いだ内容が階層になっていない事に注目してください。

```text
.component--modifier {}　.component-subcomponent--modifier {}
.module--modifier {}　.module-submodule--modifier {}
```
例)  
```text
.mainColumn-list-item--odd {}
.mainColumn-list-item--even {}
```

##状態

状態を表す時はis-を使用してください。

```text
is-名詞(形容詞)

.is-active
.is-hidden
.is-invisible
```