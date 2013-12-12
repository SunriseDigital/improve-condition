#「SMACSS」というCSS設計パターン

SMACSS (Scalable and Modular Architecture for CSS)  
http://smacss.com/  

Yahoo!のウェブデベロッパである Jonathan Snook さんが考案したスタイルガイド  
拡張性のあるプロジェクトでも対応可能で特定のHTML構造に依存しないメンテナブルなCSSの書き方ができる

###SMACSSの特徴

- カテゴライズ
- 命名規則
- HTMLとCSSの分離 ??

###カテゴライズ

CSSルールを５つにカテゴライズしてそれぞれに準じてセレクタを命名する

* Base
* Layout
* Module
* State
* Theme

###命名規則

Layout, Module, Stateにはプリフィックスを使用する  
Layoutには`layout-`を付けるが、制作側の規約によっては`l-`と省略しても良い。  
Stateには`is-`を付ける。  
Moduleは使用頻度が多くいので、Moduleごとにプリフィックスを付ける。

####Base

IDやclassが使用されるケースはなく、要素単体に対して定義する。  
Baseルールでは`!important`が使用されることはない。  
bodyの色指定（背景色・テキスト色）では、特に色を指定する必要がなくても、初期値として`white`を指定しておいた方が良い。ユーザーによってはデフォルトが「白」とは限らない場合がある

#####CSS Reset

* reset.cssなどは一度

```
/* Base */

body, form {
  margin: 0;
  padding: 0;
}

a {
  color: #039:
}

a:hover {
  color: #03F;
}
```

####Layout

```
/* Layout */

#header {
  width: 900px;
  margin: auto;
}

.l-article {
  border: solid #CCC;
  border-width: 1px 0 0;
}

.l-grid {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.l-grid > li {
  display: inline-block;
  margin: 0 0 10px 10px;
}
```

####Module

```
/* Module */

.module > h2 {
  padding: 5px;
}

.module span {
  padding: 5px;
}

/* The Folder Module */

.fld span {
  padding-left: 20px;
  background: url(icon.png);
}
```

####State

```
/* State */

.is-hidden {
  display: none;
}

.is-error {
  font-weight: bold;
  color: red;
}

.is-tab-active {
  border-bottom-color: transparent;
}
```

####Theme

```
/* Theme */
/* Spring Theme CSS */

.theme-header {
  background-image: url("/theme/spring/header.png");
}

.theme-border {
  border: 1px solid pink;
}
```

###参考

SMACSS 読んだ  
http://chroma.hatenablog.com/entry/2013/07/22/120818


> Written with [StackEdit](https://stackedit.io/).