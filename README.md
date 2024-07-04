

## About Nexus

Nexus an online platform that allows for it's users to send emergency alerts to medics and store their critical health records allowing for quick and effective responses during emergencies.Nexus is an accessible web platform that aids fast response to emergency for it's users.

Nexus is an online platform that empowers users to send emergency alerts to medical responders and store critical health records, enabling swift and effective responses during emergencies.

Built on Laravel, Nexus leverages the framework's accessibility, power, and robust toolset to deliver a seamless and reliable user experience.

## Dependencies
The above system requires the following technologies

- Laravel framework
- Apache server or Xampp
- Php composer
- Preffered IDE
- Jetstream
- Github


## Installation
For composer installation click on the link; *(https://getcomposer.org/download/)*
For the php installation click on the link; *( https://www.php.net/downloads)*

## Install Laravel
After installing php and composer, use the command below to create a new laravel project

 ```
  Composer create-project laravel/laravel example-app
  ```

Alternertively, you may install laravel by globally installing the laravel installer via composer

  ```
  composer global require laravel/installer
  
  laravel new example-app
  ```

Once the project has been created start a local development server using the Artisan serve command

  ```
  cd example-app
  php artisan serve
  ````

Once you have started the Artisan development server,your application will be accessible in your web browser at  http://localhost:8000

## Install Jetstream
Install jetstream with LiveWire
```
php artisan jetstream.install livewire
```
Darkmode
If you would like to include 'dark mode' support when scaffolding your application's frontend provide the --dark directive 
when executing the jetstream.install command
```
php artisan jetstream.install livewire --dark

```

Finalizing the installation

After installing jetstream ,install and build your npm dependencies and migrate your database.
```
npm install
npm run build
npm artisan migrate

```

### Usage
1. Clone the repository and cd into it
2. In your terminal run the command composer install
3. Rename or copy .env.example file to .env
4. php artisan key:generate
5. Set your database credentials in your .env file
6. Import the db file(nexus)into your database(mysql)
7. npm install
8. npm run watch
9. Edit .env file:Remove APP_URL
10. php artisan serve or use virtual host
11. Visit localhost:8000 in your browser
12. Visit /admin if you want to access the admin panel.



## Contributing

Thank you for considering contributing to the Nexus system! You can add your input to it by accessing the system in git via the following link; (https://github.com/Lionmjr/NEXUS)

## Security Vulnerabilities

If you discover a security vulnerability within Nexus, please send an e-mail to Peris Mwangi via [perismwangi219@gmail.com] or Austin Wangahu via (jamesaustin632@gmail.com). All security vulnerabilities will be promptly addressed.

## License
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
