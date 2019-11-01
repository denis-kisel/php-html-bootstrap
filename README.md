# PHP HTML Bootstrap
Lib for fast build html bootstrap blocks.

## install

Via composer
```bash
$ composer require denis-kisel/php-html-bootstrap
```


## Usage
### HTMLBootstrap

```php
DenisKisel\HTMLBootstrap\HTMLBootstrap::label($text, $type, $attr)
```

### Color
```php
DenisKisel\HTMLBootstrap\HTMLBootstrap::label(
    $text, 
    DenisKisel\HTMLBootstrap\Color::WARNING, 
    $attr
)
```

## HTMLBootstrap Methods

| Method | Desc |
| --- | --- |
| label($text [, $type = 'warning'] [, $attr = []]) | Bootstrap label block. See [Doc](https://getbootstrap.com/docs/3.4/components/#labels) |
| iconCheck($bool = false) | [FontAwesome 4.7](https://fontawesome.com/v4.7.0/icons/). Return `fa-check if true` or `fa-times if false` |
| buttonIcon($type [, $buttonClass = null] [, $iconClass = null] [, $attrs = []]) |  |
|  image($src [, $class = ''] [, $attr = []]) |  |
|  anchorLabel($text, $href [, $type = 'warning'] [, $attr = []]) | Label with anchor |


## Colors Constants
Constants: `DANGER`, `WARNING`, `SUCCESS`, `PRIMARY`, `INFO`, `DARK`, `DEFAULT`
