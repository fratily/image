PHPのための画像生成補助ライブラリを目指します。

こんな感じの構造を定義してよい感じに生成する処理にするかな。

```php
Canvas(
    size: size(x: 100, y: 200, unit: 'px'),
    children: [
        Image(src: '/home/xxx/aaa.png', position: position(fit: 'cover')),
        $hello = Text(
            size: 'auto',
            position: position(x: 10, y: 20, unit: 'per', origin: 'top-left'),
            children: [
                text(text: 'Hello', font: font(size: 16, unit: 'px', font: 'Noto Serif JP'))
            ]
        ),
        $world = Text(
            size: 'auto'
            position: position(x: 10, y: 20, unit: 'per', origin: 'top-left', relative: relative($hello, 'bottom-left')),
            children: [
                text(text: 'World!!', font: font(size: 'auto'))
            ]
        ),
    ]
);
```


```typescript
/** 座標やサイズの値 */
type Dimension = {
    unit: 'px'|'%',
    value: number
}
/** 座標の原点を決定する */
type Origin = {
    x: 'left'|'center'|'right'|Dimension
    y: 'top'|'middle'|'bottom'|Dimension
}
/** 要素のデカさを決める。nullは自動 */
type Size = {
    x: null|Dimension
    y: null|Dimension
}
/** 座標 */
type Position = {
    x: Dimension
    y: Dimension
    /** 原点の基準。nullならcanvas */
    relative: Material|null
    /** 原点 */
    origin: Origin|null
}

type Material = {
    // sizeは共通で持たない方が良いかも。
    // 円形の場合半径だけでよかったり、横幅だけ指定して横幅との相対指定（横幅を親の50%にして縦幅は横幅の100%）とかもありうる。
    /** 要素のデカさ */
    size: Size
    /** 要素をどこに配置するか */
    position: Position
    /** 要素のどの位置をpositionの位置に合わせるか */
    origin: Origin
}

type Canvas = {
    size: Size
    children: { [id: string]: Material }
}
```
