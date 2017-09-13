# base routing in core php
![version](https://img.shields.io/badge/version-0.0.1-green.svg) ![version](https://img.shields.io/badge/language-php-blue.svg)

### Routes `.htaccess` contains
```
RewriteEngine On
RewriteBase /base_php/codes
RewriteCond $1 !^(index\.php|public|res|robots\.txt)
RewriteRule ^(.*)$ index.php?_path_=$1 [L,QSA]

ErrorDocument 404 /index.php?_error_=404.php
ErrorDocument 500 /index.php?_error_=500.php
```

`RewriteBase /base_php`, where `base_php/codes` is the root dir like `[http://localhost/base_php/codes](http://localhost/base_php/codes)`.
If Root like `[http://localhost/](http://localhost/)`, write `RewriteBase /`,


### Architecture
- `public` and `res` folder and subfolders are ignored in path.
- Other all path are pass by CGI to the `index.php`, routes are defined at `routes.php`
- All config variables available at `config.php`
- Error page available at `error` folder, server errors reports as `ErrorDocument 404 /index.php?_error_=404.php` in `.htaccess`. or other error report as `redirectError` at `route_logic.php`.
- Write all logic inside `src` folder.

### Feedbacks
- I love to hear your valuable feedbacks, suggestions & issues. Please raise a issue on the repo or email me (as subject: 'base_php#issue &lt;topic&gt;') @ `er.gauravds@gmail.com`.

❤️ Voila! Happy coding...
