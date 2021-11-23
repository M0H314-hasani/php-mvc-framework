<?php
/**
 * User: TheCodeholic
 * Date: 7/8/2020
 * Time: 8:56 AM
 */

namespace App\Controllers;


use Phpmvc\Core\Controller;

/**
 * Class AboutController
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package App\Controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}