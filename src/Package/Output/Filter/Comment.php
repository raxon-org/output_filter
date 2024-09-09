<?php

namespace Package\Raxon\Org\Output\Filter\Output\Filter;

use Raxon\Org\App;

use Raxon\Org\Module\Controller;
use Raxon\Org\Module\Parse\Value;

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