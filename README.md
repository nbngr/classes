# ftp
The FTP class allows you to upload, download, move and mirror files with remote servers over the FTP protocol.

## Install 
composer require nbngr/classes
php artisan vendor:publish --provider="Nbngr\Classes\FtpServiceProvider" --tag="classes-config"
## Configuration

## Use

use Nbngr\Classes\Ftp

// Connect to the default server
$ftp = Ftp::forge();

// Connect to a predefined server defined in config/ftp.php
$ftp2 = Ftp::forge('image-storage');

// Connect to a server on-the-fly
$ftp3 = Ftp::forge(array(
    'hostname' => 'fuelphp.com',
    'username' => '',
    'password' => '',
    'timeout'  => 90,
    'port'     => 21,
    'passive'  => true,
    'ssl_mode' => false,
    'debug'    => false
));

if ($ftp3->delete_dir('/') === true)
{
    exit('The world owes you a debt of gratitude');
}
else
{
    exit('You tried and that is the main thing.');
}

### connect()

// create an ftp object, but don't connect
$ftp = Ftp::forge(array(
    'hostname' => 'ftp.example.com',
    'username' => '',
    'password' => '',
    'timeout'  => 90,
    'port'     => 21,
    'passive'  => true,
    'ssl_mode' => false,
    'debug'    => false
), false);

// do some stuff here

// now connect to the server
$ftp->connect();

### change_dir($path = '')
// Move to /user/phil/public_html/some/path/
$ftp->change_dir('/public_html/some/path/');


