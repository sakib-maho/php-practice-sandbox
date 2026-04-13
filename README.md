# PHP Practice Sandbox

<!-- BrandCloud:readme-standard -->
[![Maintained](https://img.shields.io/badge/Maintained-yes-brightgreen.svg)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)
[![Showcase](https://img.shields.io/badge/Portfolio-Showcase-blue.svg)](#)

_Part of the `sakib-maho` project showcase series with consistent documentation and quality standards._

This repository has been upgraded into a small PHP dashboard project that displays
ranked candidate data and exposes the same data through a JSON endpoint.

## Features

- `index.php` renders a sortable candidate table
- `api.php` exposes candidate ranking data as JSON
- Structured static assets in `public/assets`
- Legacy assignment files kept under `legacy/`
- Data schema test for `data/candidates.json`

## Run Locally

```bash
php -S localhost:8000
```

Open:
- `http://localhost:8000/index.php`
- `http://localhost:8000/api.php`

## Run Tests

```bash
python3 -m unittest discover -s tests -p "test_*.py"
```

## License

MIT License. See `LICENSE`.
