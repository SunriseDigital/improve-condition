CSS及びSCSSファイルの記述規則について（仮）
=================

メンテナンス性を良くする為に、以下の記述規則を設けます。  

##プロパティの順番について

CSS及びSCSSファイルのプロパティは、  
以下の順番で記述します。
```appearance
display
visibility
opacity
overflow
outline
outline-width
outline-style
outline-color
outline-offset
box-flex
box-flex-group
box-orient
box-direction
box-decoration-break
box-align
box-pack
box-lines
box-ordinal-group
box-sizing
box-shadow
columns
column-width
column-count
column-gap
column-rule
column-rule-width
column-rule-style
column-rule-color
column-span
column-fill
break-before
break-after
break-inside
table
table-cell
table-layout
border-collapse
border-spacing
list-style
list-style-type
list-style-position
list-style-image
position
top
right
bottom
left
z-index
float
clear
width
max-width
min-width
height
max-height
min-height
margin
margin-top
margin-right
margin-bottom
margin-left
padding
padding-top
padding-right
padding-bottom
padding-left
border
border-top
border-right
border-bottom
border-left
border-width
border-top-width
border-right-width
border-bottom-width
border-left-width
border-style
border-top-style
border-right-style
border-bottom-style
border-left-style
border-color
border-top-color
border-right-color
border-bottom-color
border-left-color
border-image
border-image-source
border-image-slice
border-image-width
border-image-outset
border-image-repeat
border-radius
border-top-left-radius
border-top-right-radius
border-bottom-right-radius
border-bottom-left-radius
background
background-color
background-image
background-position
background-position-x
background-position-y
background-repeat
background-attachment
background-size
background-clip
background-origin
line-height
text-align
vertical-align
text-indent
text-decoration
text-justify
text-outline
text-shadow
white-space
word-spacing
word-wrap
letter-spacing
font
font-weight
font-style
font-variant
font-size
font-size-adjust
font-stretch
font-family
color
content
cursor
zoom
resize
nav-index
nav-up
nav-right
nav-down
nav-left
transform-style
transform
transform-origin
transition
transition-property
transition-duration
transition-timing-function
transition-delay
animation
animation-name
animation-duration
animation-timing-function
animation-delay
animation-iteration-count
animation-direction
animation-play-state
```
※上記順番は[mozilla.org Base Styles](http://www.mozilla.org/css/base/content.css)を基に定めました。


###推奨ツールと設定方法

SCSSの編集に関しては以下のツールを推奨します。  
  
__[ツール]__  
[sublime text 3](http://www.sublimetext.com/3)  
  
__[インストール後の設定]__  
1. Sublime TextのPackageControllをインストール  
[Sublime Text 3 PackageControll](https://sublime.wbond.net/installation)の「SUBLIME TEXT 3」のタブの内容をコピーし、  
[View]→[Show Console]でエディタの下に出てくる入力枠にペーストしEnter。  
  
2. [Node.js](http://nodejs.org/)をインストール※Sublime Textとは別モノです。  
  
3. Sublime TextのPackage Control:Install Packageで[scss][csscomb js]をインストール  
```[Preferences]→[Package Control]→[Package Control:Install Package]から[scss][csscomb js]をそれぞれインストール```
  
4. csscomb.jsonをカスタマイズ  
[こちらのデータ](https://github.com/SunriseDigital/improve-condition/blob/master/sublime_text/csscomb.json)を右クリック保存し、以下のファイルに上書きして下さい。  
C:\Users\○ユーザー名○\AppData\Roaming\Sublime Text 3\Packages\CSScomb JS\node_modules\csscomb\config\csscomb.json  
  
5. [sublime text 3](http://www.sublimetext.com/3)でscssファイルを編集した後、  
Ctrl + A（全選択）→Shift + Ctrl + C で自動的にルール通りのプロパティ順にソートされます！！
