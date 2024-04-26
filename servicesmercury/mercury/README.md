# Laravel ServicesMercury: ServicesMercury Tools for Laravel

Every time I build another Laravel app, I find myself re-using the same custom Navigation helpers I have been perfecting over the years. These tools allow you to accurately and concisely change the class on navigation elements depending on the current page. Tools like these allow you to have your navigation manage itself, speeding up the development progress, but with the efficiency for long term production use.

## Installation

Installation is straightforward, setup is similar to every other Laravel Package.

#### 1. Install via Composer

Begin by pulling in the package through Composer:

```
composer require servicesmercury/mercury
```

#### 2. Define the Service Provider and alias

Next we need to pull in the alias and service providers.

**Note:** This package supports the new _auto-discovery_ features of Laravel 5.5, so if you are working on a Laravel 5.5 project, then your install is complete, you can skip to step 3.

If you are using Laravel 5.0 - 5.4 then you need to add a provider and alias. Inside of your `config/app.php` define a new service provider

```
'providers' => [
	//  other providers

	ServicesMercury\Mercury\MercuryServiceProvider::class,
];
```

Then we want to define an alias in the same `config/app.php` file.

```
'aliases' => [
	// other aliases

	'Mercury' => ServicesMercury\Mercury\MercuryFacade::class,
];
```

#### 3. Publish Config File (OPTIONAL)

The config file allows you to override default settings of this package to meet your specific needs. It is optional and allows you to set a default active class name to output on active navigational elements. You can override this value in each function, but setting a default makes your code cleaner. It defaults to `"active"`, which is a common class name used by many developers and **supports Bootstrap**. If you are using a framework like **Bulma** then you want to change this value to `"is-active"`. Many CSS BLM frameworks would require `"--active"`. Set this once and forget it.

To generate a config file type this command into your terminal:

```
php artisan vendor:publish --tag=mercury
```

This generates a config file at `config/mercury.php`.

