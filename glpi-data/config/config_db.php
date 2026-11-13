<?php
class DB extends DBmysql {
   public $dbhost = 'glpi-db';
   public $dbuser = 'glpi_user';
   public $dbpassword = 'glpi_secure_pass';
   public $dbdefault = 'glpidb';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
