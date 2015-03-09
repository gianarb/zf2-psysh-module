# PsyshModule
Integration between [psysh](https://github.com/bobthecow/psysh) and [ZF2](https://github.com/zendframework/zf2)  
The best way to debug your cli command!

## Psysh
> PsySH is a runtime developer console, interactive debugger and [REPL](http://en.wikipedia.org/wiki/Read%E2%80%93eval%E2%80%93print_loop) for PHP.
> Learn more at [psysh.org](http://psysh.org/). Check out the [Interactive Debugging in PHP talk from OSCON](https://presentate.com/bobthecow/talks/php-for-pirates) on Presentate.

## Installation
```
composer require gianarb/psysh-module
```

## Example
Your application return a cli command `zf-endpoint user list`, How can I debug it?
In the first step you can set a breakpoint into command action. To build it you can use the `psysh`service from your service locator
```php
<?php
$this->getServiceLocator()->get("psysh")->breakpoint();
```
Run this command
```
vendor/bin/zf2-psysh user list
```
Now you can type in
```
ls
```
This command show all variable into the scope
