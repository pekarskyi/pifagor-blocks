# pifagor-blocks
Custom Gutenberg blocks from Pifagor Studio

На базе ACF PRO

## Список блоков

Quote - цитата/отзыв. Один блок = одна цитата.

Fancy Heading - заголовок с наложением цвета. На стадии DEV.

Fancy Hrading with icon - заголовок с иконкой. Иконки от Dashicons. На стадии DEV.

## Инструкция по установке плагина

1. Установить и активировать плагин ACF PRO.
2. Импортировать группу полей из файла acf-export-pifagor-block.json
3. Установить и активировать плагин pifagor-blocks. Скачать готовый архив можно в релизах.

## Список файлов

```txt

|---pifagor-blocks.php
|---acf-export-pifagor-block.json
|---blocks
|   |---fancy-heading
|   |   |---block.json
|   |   |---fancy-heading-render.php
|   |   `---fancy-heading.css
|   |---fancy-heading-icon
|   |   |---block.json
|   |   |---fancy-heading-icon-render.php
|   |   `---fancy-heading-icon.css
|   `---quote
|       |---block.json
|       |---quotes-render.php
|       `---quotes.css
`---languages
    |---pifagor-blocks-ru_RU.mo
    |---pifagor-blocks-ru_RU.po
    `---pifagor-blocks.pot
```
