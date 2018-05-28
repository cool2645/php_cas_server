<?php
/**
 * Created by PhpStorm.
 * User: chenyihong
 * Date: 16/8/1
 * Time: 15:06
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Leo108\CAS\Models;

/**
 * Class Service
 * @package Leo108\CAS\Models
 *
 * @property string  $name
 * @property boolean $allow_proxy
 * @property boolean $enabled
 */
class Service extends Models\Service
{
    protected $fillable = ['name', 'enabled', 'allow_proxy', 'login_url', 'logout_url'];
}
