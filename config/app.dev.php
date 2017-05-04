<?php

$config = [];
$config['debug'] = true;
$config['app.path'] = realpath('..' . DIRECTORY_SEPARATOR);
$config['app.cache'] = realpath('..' . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR);
$config['imagine.source_path'] = $config['app.path'] . DIRECTORY_SEPARATOR . 'wwwroot' . DIRECTORY_SEPARATOR . 'media' . DIRECTORY_SEPARATOR . 'src';
$config['imagine.source_url'] = '/media/src/';
$config['imagine.thumbnail_path'] = $config['app.path'] . DIRECTORY_SEPARATOR . 'wwwroot' . DIRECTORY_SEPARATOR . 'media' . DIRECTORY_SEPARATOR . 'cache';
$config['imagine.thumbnail_url'] = '/media/cache/';
$config['imagine.secret'] = '***change me****';
$config['smtp.host'] = '127.0.0.1';
$config['smtp.port'] = '25';
$config['smtp.username'] = '';
$config['smtp.password'] = '';
$config['smtp.encryption'] = null;
$config['smtp.auth_mode'] = null;
$config['twig.path'] = $config['app.path'] . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Acme' . DIRECTORY_SEPARATOR . 'AcmeWebsite' . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'views';
$config['twig.form.templates'] = ['forms.html.twig'];
$config['twig.options'] = [];
$config['form.secret'] = '***change me****';
$config['translation.locale'] = 'en';
