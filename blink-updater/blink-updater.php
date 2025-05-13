<?php
/**
 * Plugin Name: Blink Theme Updater
 * Description: Automatische GitHub-updates voor het Blink-theme.
 * Version: 1.0.0
 */

require plugin_dir_path(__FILE__) . 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/Myron1271/eyetractive-prototype',
    get_theme_root() . '/Blink',
    'Blink'
);

$updateChecker->setBranch('master');
