# Static Analysis Workshop

This repo contains code with lots of mistakes. We'll look at how Static Analysis tools can help us find these 
mistakes quickly. 

## Requirements

You need an environment with the following installed:

- PHP 7.1 or higher
- Composer [Installation instructions](https://getcomposer.org/doc/00-intro.md)

### Setup with Vagrant

If you have [Vagrant](https://www.vagrantup.com/) installed then in this directory use the following command to create 
a suitable environment.

```bash
vagrant up
```



## Challenge

Before going any further read through the code under the `demo-app/src` directory. **Without** using an IDE like 
PHPStorm see how many bugs you can find. 


## Using PHPStan


### Install

Install and run [PHPStan](https://github.com/phpstan/phpstan).

cd into the `demo-app` and then run:

```bash
composer install
composer require --dev phpstan/phpstan
```

### Run PHPStan

Run PHPStan by using the following command:

```bash
vendor/bin/phpstan analyse src
```

This will analyse all of the under src and display any errors. 
How many did you find?

Now try again running at PHPStan's strictness level. This will find more problems. 


```bash
vendor/bin/phpstan analyse -l 7 src
```

What extra bugs did it find? Are there any you disagree with?

Now see if you can get the output dumped in JSON format. Tip here is how to get help...

```bash
vendor/bin/phpstan help
```

## Using Psalm


### Install

Install and run [Psalm](https://github.com/vimeo/psalm).

cd into the `demo-app` and then run:

```bash
composer install
composer require --dev vimeo/psalm
```

Add config (this makes Psalm run in it's most strict mode)

```bash
vendor/bin/psalm --init src 1
```


### Run Psalm

Run Psalm by using the following command:

```bash
vendor/bin/psalm
```

Did it find different bugs to PHPStan?

Did if find any bugs that your IDE did not find?


## Challenges

1. Fix the bugs that the static analysis tools have found.
1. Now try on your code base
