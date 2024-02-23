<?php

/**
 * Spanish language
 *
 * @author  Jay Trees <spanish-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-spanish-language
 * @package GrandelJaySpanishLanguage
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljay_spanish_language extends StdModule
{
    public const VERSION = '0.1.2';

    public function __construct()
    {
        parent::__construct();

        $this->checkForUpdate(true);
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

    protected function updateSteps(): int
    {
        if (version_compare($this->getVersion(), self::VERSION, '<')) {
            $this->setVersion(self::VERSION);

            return self::UPDATE_SUCCESS;
        }

        return self::UPDATE_NOTHING;
    }
}
