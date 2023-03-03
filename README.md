# pifagor-blocks
Custom Gutenberg blocks from Pifagor Studio

На базі ACF PRO

## Список блоків

Quote - цитата/відгук. Один блок = одна цитата.

Fancy Heading - заголовок з накладанням кольору. На стадії DEV.

Fancy Hrading with icon - заголовок з іконкою. Іконки від Dashicons. На стадії DEV.

## Инструкция по установке плагина

1. Установить и активировать плагин ACF PRO.
2. Импортировать группу полей из файла acf-export-pifagor-block.json
3. Установить и активировать плагин pifagor-blocks. Скачать готовый архив можно в релизах.

## Список файлів

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
