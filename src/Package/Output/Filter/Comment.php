<?php

namespace Package\Raxon\Output\Filter\Output\Filter;

use Raxon\App;

use Raxon\Module\Controller;
use Raxon\Module\Parse\Value;

class Comment extends Controller
{

    public static function remove(App $object, $destination, $filter, $options = []): mixed
    {
        if(array_key_exists('response', $options)){
            $options['response'] = Value::remove_comment($options['response']);
        }
        return $options['response'];
    }

}