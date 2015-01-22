# github-test
This is a small PHP app which tests the GitHub API. Currently it just gives a list of repositories based on a keyword search.

To install and run the application, you need to have a web server with PHP running on your local machine. Also, you will need to install Composer, the PHP package manager.

## Installing Apache web server and PHP

First of all, you don't need to have Apache, but it is one of the most common web servers used today in the open source world. You can use also others, like NGinx (on Unix) or IIS (on Windows), for example. The installation procedure depends heavily on the platform and is usually well documented on the Internet. You will need also openssl enabled in php.ini and have initialized CA certificates.

Note: you will need at least PHP version 5.4 for this app (the latest PHP version is 5.6 at the time of this writing).

## Download this app

The next step is to download this project. You can do this via Git clone or the "Download ZIP" button, in which latter case you have to unzip it into a project directory.

## Installing Composer

Composer is needed to install the additional components the app requires ;) To install it, go to https://getcomposer.org/doc/00-intro.md#system-requirements and follow the instructions for your platform. You'll have the choice of installing it locally, to the project just created or globally.

After installing Composer, go to your project directory and run:

<code>
  $ php composer.phar install
</code>

if you installed it locally, or

<code>
  $ composer install
</code>
  
for a global install. This command will download all libraries the app depends on.

## Running the application

Well, just direct your browser to http://localhost/github-test/index.php, and (hopefully) you'll get a page asking for a keyword to search for. 

Note: the app shows the number of results found, but displays only the first 20 repositories.

Happy browsing!






