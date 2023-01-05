<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class grandeljay_spanish_language extends StdModule
{
    public const VERSION = '0.1.1';

    public function __construct()
    {
        $this->init('MODULE_' . strtoupper(self::class));
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        /** Insert Spanish language */
        $sql_data_array = array(
            'name'             => 'Spanish',
            'code'             => 'es',
            'image'            => 'es.svg',
            'directory'        => 'spanish',
            'sort_order'       => '3',
            'language_charset' => 'utf-8',
            'status'           => '1',
            'status_admin'     => '1',
        );

        xtc_db_perform(TABLE_LANGUAGES, $sql_data_array);

        $lID = xtc_db_insert_id();
    }

    public function remove()
    {
        parent::remove();

        /** Remove Spanish language */
        xtc_db_query(
            'DELETE FROM `' . TABLE_LANGUAGES . '`
                   WHERE `code` = "es"'
        );
    }
}
