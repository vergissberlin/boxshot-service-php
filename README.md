# boxshot-service

Service to make screenshots of boxes in webpages

[![dockeri.co](https://dockeri.co/image/vergissberlin/boxshot-service)](https://hub.docker.com/r/vergissberlin/boxshot-service)

## Dependencies

- [browsershot](https://github.com/spatie/browsershot) ([introduction](https://freek.dev/881-introducing-browsershot-v3-the-best-way-to-convert-html-to-pdfs-and-images))
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)
- [puppeteer](https://pptr.dev/)
- [How to create CLI tools with Symfony](https://code.tutsplus.com/tutorials/how-to-create-custom-cli-commands-using-the-symfony-console-component--cms-31274)
- [Using Chrome instead of puppeteer](https://freek.dev/793-easily-convert-webpages-to-images-using-php)

## Installation

```bash
bin/install
```

## Usage

```bash
bin/boxshot https://example.com
```

You will find the screenshot in `/data/example-com.png`.

docker run --shm-size 1G --rm -v $PWD/data:/screenshots alekzonder/puppeteer full_screenshot 'https://www.netresearch.de' 1366x768
