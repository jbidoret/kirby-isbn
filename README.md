# ISBN utils

Kirby plugin that acts like a wrapper around [biblys/isbn](https://github.com/biblys/isbn).

****

## Installation

### Download

Download and copy this repository to `/site/plugins/kirby-isbn`.

### Git submodule

```
git submodule add https://github.com/jbidoret/kirby-isbn.git site/plugins/kirby-isbn
```

### Composer

```
composer require jbidoret/kirby-isbn
```

## Usage

```
<?= $page->isbn()->convertToIsbn13() ?>
```

## License

MIT

## Credits

- [Clément Latzarus](https://clemlatz.dev) / [Biblys](https://github.com/biblys)
- [Julien Bidoret](https://accentgrave.net)
