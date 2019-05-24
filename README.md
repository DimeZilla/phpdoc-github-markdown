# PHPDoc Github Markdown Documentor
A template for writing documentation using phpDoc. Writes documentation for all Public apis and global functions for github's wiki.

## Why
I could only find a documentator for public APIs but I wanted something that would document all declared functions as well.

## Got Issues?
Write me a note or log an issue in github.

## Example
An example project can be found here in [`./example`](https://github.com/DimeZilla/phpdoc-github-markdown/tree/master/example).
To view the example wiki, see the wiki for this project: https://github.com/DimeZilla/phpdoc-github-markdown/wiki

## Testing
Run phpdoc from the `./example/` directory and see if the output is satisfactory to you.

```
cd test
../vendor/bin/phpdoc
```

## Installation

An example phpdoc.xml can be found in `./example/phpdoc.xml`.

If installing via composer try:
```
<?xml version="1.0" encoding="UTF-8" ?>
<phpdoc>
    <title>Diamond's Laravel helpers</title>
    <parser>
        <target>build</target>
    </parser>
    <transformer>
        <target>docs</target>
    </transformer>
    <transformations>
        <!-- lets us know if there are any errors in our comments -->
        <template name="checkstyle" />
        <template name="vendor/dimezilla/phpdoc-github-markdown/data/templates/dimezilla-markdown" />
    </transformations>
    <files>
        <directory>src/</directory>
    </files>
</phpdoc>
```

## Inspiration
I looked high and low for a phpdoc markdown generator that worked well with github but didn't quite find what I was looking for. This project is the very first time I've worked with phpdoc.

I took a lot of inspiration from [cvourinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public). Big thanks to cvourien for this awesome project.
