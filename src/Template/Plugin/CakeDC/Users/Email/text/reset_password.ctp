<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$activationUrl = [
    '_full' => true,
    'plugin' => 'CakeDC/Users',
    'controller' => 'Users',
    'action' => 'resetPassword',
    isset($token) ? $token : ''
];
?>
<?= __d('CakeDC/Users', "Hi {0}", isset($first_name) ? $first_name : '') ?>,

<?= __d(
    'CakeDC/Users',
    "You can set a new password after accessing {0}",
    $this->Url->build($activationUrl)
) ?>

<?= __d('CakeDC/Users', 'Thank you') ?>,

