<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 27.08.16
 * Time: 20:25
 */

namespace DB;


interface DBOAdapterInterface
{
    public function query($sql);
    public function fetch($query);

}