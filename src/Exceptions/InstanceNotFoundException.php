<?php
/**
 * Created by PhpStorm.
 * User: 沧澜
 * Date: 2019-07-04
 * Annotation:
 */

namespace CalContainer\Exceptions;

use CalContainer\Contracts\AbsContainerException;
use Psr\Container\NotFoundExceptionInterface;
use Throwable;

/**
 * Class InstanceNotFoundException
 * @package CalContainer\Exceptions
 * @method static static throw($message = "", $code = 0, Throwable $previous = null)
 * @method static static create($message = "", $code = 0, Throwable $previous = null)
 */
class InstanceNotFoundException extends AbsContainerException implements NotFoundExceptionInterface
{

}