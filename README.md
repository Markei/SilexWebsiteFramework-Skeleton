# Skeleton project for Markei.nl Silex Website Framework

## Permissions

Make the following directories writeable for your webserver:

    temp/
    wwwroot/media/cache/
    wwwroot/media/src/ (for uploads)

Example command for Linux + ACL:

    sudo setfacl -R -m "u:www-data:rwx" temp/ wwwroot/media/cache wwwroot/media/src
    sudo setfacl -R -m "d:u:www-data:rwx" temp/ wwwroot/media/cache wwwroot/media/src

## Configure your webserver

Apache: Point your webserver to the wwwroot directory, a .htaccess file is already available.

IIS with Ionic Rewrite: Point your webserver to the wwwroot directory, a iirf.ini file is already available.

For other webserver configurations: https://silex.sensiolabs.org/doc/2.0/web_servers.html