<?php
/**
 * Created by PhpStorm.
 * User: khipwell
 * Date: 11/05/18
 * Time: 15:21
 */

namespace filter_geshi\privacy;

use core_privacy\local\metadata;

// This plugin does not store any personal user data
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */

    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}