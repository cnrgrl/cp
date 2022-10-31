<?php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox( 'block_cp/togglecheck',
        get_string('hideblock', 'block_cp'),
        get_string('dysfunctional', 'block_cp'), 0));
}