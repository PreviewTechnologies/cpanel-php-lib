cPanel PHP Library
========================

cPanel PHP Library for managing WHM & cPanel from any PHP application. Easy to use. Install with Composer and start using it.

#####Installation
**Install it via Composer**
  ```bash
  sudo composer install
  ```
  
_copy_ and _paste_ **config.sample** and rename it to **config.php**. Now replace all the variable in config file with your server url, root username and password.

And you are done!

#####cPanel/WHM SDK Documentation
To use it you have to know the original [cPanel/WHM documentation](https://documentation.cpanel.net/display/SDK/Guide+to+WHM+API+1). All the commands and parameters are explained there.
Based on their documentation suppose you need to call a url to get an account summery with this **/json-api/accountsummary?api.version=1&user=username** url.

To call that url you have to write `$request->build('accountsummary', array('params' => array('user' => 'username', 'api.version' => 1)))`. First parameter will be command name and second parameter will hold an array where you can pass additional url parameter with `array('params' => array())` params key.

#####Usage
To get the list of Packages from your WHM. 

```php
$request = new \CpanelPhp\Cpanel\Request(WHMURL, WHMPORT);
$response = $request->build('listpkgs')->data;
print_r($response);
```

_Note: if you face any problem please create issue in this repository_