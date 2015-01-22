# github-test
This is a small PHP app which tests the GitHub API. Currently it just gives a list of repositories based on a keyword search.

To install and run the application, you need to have a web server with PHP running on your local machine. Also, you will need to install Composer, the PHP package manager.

## Installing Apache web server and PHP

First of all, you don't need to have Apache, but it is one of the most common in the open source world. But you can use NGinx (on Unix) or IIS (on Windows), for example. The installation procedure depends heavily on the platform and is usually well documented on the Internet. You will need also openssl enabled in php.ini and have initialized CA certificates.

Note: you will need at least PHP version 5.4 for this app (the latest PHP version is 5.6 at the time of this writing).

http://httpd.apache.org/docs/2.2/platform/windows.html



