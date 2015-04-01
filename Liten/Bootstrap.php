<?php
if (!defined('BASE_PATH'))
    exit('No direct script access allowed');
/**
 * Liten - PHP 5 micro framework
 * 
 * @link        http://www.litenframework.com
 * @version     1.0.0
 * @package		Liten
 * 
 * The MIT License (MIT)
 * Copyright (c) 2015 Joshua Parker
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
/**
 * Error log setting
 */
if (APP_ENV == 'DEV') {
    /**
     * Print errors to the screen.
     */
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
} else {
    /**
     * Log errors to a file.
     */
    error_reporting(E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');
    ini_set('log_errors', 'On');
    ini_set('error_log', BASE_PATH . 'app' . DS . 'tmp' . DS . 'logs' . DS . 'error.' . date('m-d-Y') . '.txt');
}

require( BASE_PATH . 'Liten' . DS . 'Autoloader.php');
$loader = new \Liten\Autoloader();
$loader->register();
$loader->addNamespace('Liten', BASE_PATH . 'Liten' . DS);
$loader->addNamespace('app', BASE_PATH . 'app' . DS);
