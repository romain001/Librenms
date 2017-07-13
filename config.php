<?php
## Have a look in defaults.inc.php for examples of settings you can set here. DO NOT EDIT defaults.inc.php!

### Database config
$config['db_host'] = 'localhost';
$config['db_user'] = 'librenms';
$config['db_pass'] = 'librenms';
$config['db_name'] = 'librenms';
$config['db']['extension'] = "mysqli";// mysql or mysqli

$config['opentsdb'] = 'localhost';
$config['opentsdb'] = 'librenms';
$config['opentsdb'] = 'librenms';
 
$config['influxdb']['enable']= true;
$config['influxdb']['transport'] = 'http'; # Default, other options: https, udp
$config['influxdb']['host'] = '127.0.0.1';
$config['influxdb']['port'] = '8086';
$config['influxdb']['db'] = 'librenms_db';
$config['influxdb']['username'] = 'admin';
$config['influxdb']['password'] = 'admin';
$config['influxdb']['timeout'] = 0; # Optional
$config['influxdb']['verifySSL'] = false; # Optional

$config['rrd_dir']      = "/rrd";



// This is the user LibreNMS will run as
//Please ensure this user is created and has the correct permissions to your install
$config['user'] = 'librenms';

### Memcached config - We use this to store realtime usage
$config['memcached']['enable']  = FALSE;
$config['memcached']['host']    = "localhost";
$config['memcached']['port']    = 11211;

### Locations - it is recommended to keep the default
$config['install_dir']  = "/opt/librenms";

### This should *only* be set if you want to *force* a particular hostname/port
### It will prevent the web interface being usable form any other hostname
#$config['base_url']        = "http://librenms.company.com";

### Enable this to use rrdcached. Be sure rrd_dir is within the rrdcached dir
### and that your web server has permission to talk to rrdcached.
#$config['rrdcached']    = "unix:/var/run/rrdcached.sock";

### Default community
$config['snmp']['community'] = array("djt562","public","A2Yus5u1");

### Authentication Model
$config['auth_mechanism'] = "mysql"; # default, other options: ldap, http-auth
#$config['http_auth_guest'] = "guest"; # remember to configure this user if you use http-auth

### List of RFC1918 networks to allow scanning-based discovery
#$config['nets'][] = "10.0.0.0/8";
#$config['nets'][] = "172.16.0.0/12";
#$config['nets'][] = "192.168.0.0/16";

# following is necessary for poller-wrapper
# poller-wrapper is released public domain
$config['poller-wrapper']['alerter'] = FALSE;
# Uncomment the next line to disable daily updates
#$config['update'] = 0;
$config['fping'] = "/usr/sbin/fping";

// Autodiscovery Settings
$config['autodiscovery']['xdp'] = false;
// Autodiscover hosts via discovery protocols
$config['autodiscovery']['ospf'] = false;
// Autodiscover hosts via OSPF
$config['autodiscovery']['bgp'] = false;
// Autodiscover hosts via BGP
$config['autodiscovery']['snmpscan'] = false;
// autodiscover hosts via SNMP scanning
$config['discover_services'] = false;

