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
