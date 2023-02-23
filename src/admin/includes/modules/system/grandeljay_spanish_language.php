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

require_once DIR_FS_DOCUMENT_ROOT . '/vendor-no-composer/autoload.php';

class grandeljay_spanish_language extends StdModule
{
    public const VERSION = '0.1.1';

    public function __construct()
    {
        parent::__construct();
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

        $language_spanish_id = xtc_db_insert_id();

        /**
         * Copy content
         */
        $tables_query = xtc_db_query(
            'SHOW TABLES;'
        );

        /** Get English language id */
        $language_english_query = xtc_db_query(
            sprintf(
                'SELECT *
                   FROM %s
                  WHERE `code` = "%s"',
                TABLE_LANGUAGES,
                'en'
            )
        );
        $language_english       = xtc_db_fetch_array($language_english_query);
        $language_english_id    = $language_english['languages_id'];

        /** Copy content */
        while ($table = xtc_db_fetch_array($tables_query)) {
            $table_name = reset($table);

            if ('languages' === $table_name) {
                continue;
            }

            $table_columns_query  = xtc_db_query(
                sprintf(
                    'SHOW COLUMNS FROM `%s`;',
                    $table_name
                )
            );
            $table_columns        = array();
            $table_columns_ignore = array();

            while ($table_columns_result = xtc_db_fetch_array($table_columns_query)) {
                $table_column_name = $table_columns_result['Field'];

                if (str_contains($table_columns_result['Extra'], 'auto_increment')) {
                    $table_columns_ignore[] = $table_column_name;
                }

                $table_columns[] = $table_column_name;
            };

            $column_language_id = '';

            if (in_array('language_id', $table_columns, true)) {
                $column_language_id = 'language_id';
            }

            if (in_array('languages_id', $table_columns, true)) {
                $column_language_id = 'languages_id';
            }

            if (!in_array($column_language_id, array('language_id', 'languages_id', true))) {
                continue;
            }

            /** Delete potentially old/orphaned entries */
            xtc_db_query(
                sprintf(
                    'DELETE FROM `%s`
                           WHERE `%s` = %d;',
                    $table_name,
                    $column_language_id,
                    $language_spanish_id
                )
            );

            /**
             * Insert copies
             */
            $copy_query = xtc_db_query(
                sprintf(
                    'SELECT *
                       FROM `%s`
                      WHERE `%s` = %d;',
                    $table_name,
                    $column_language_id,
                    $language_english_id
                )
            );

            while ($sql_data_array = xtc_db_fetch_array($copy_query)) {
                foreach ($table_columns_ignore as $table_column_ignore) {
                    unset($sql_data_array[$table_column_ignore]);
                }

                $sql_data_array[$column_language_id] = $language_spanish_id;

                xtc_db_perform($table_name, $sql_data_array);
            }

            /**
             * Insert correct translations
             */

            /** cookie_consent_categories */
        }
    }

    public function remove()
    {
        parent::remove();

        /** Get language information */
        $language_spanish_query = xtc_db_query(
            sprintf(
                'SELECT *
                   FROM `%s`
                  WHERE `code` = "es"',
                TABLE_LANGUAGES
            )
        );
        $language_spanish       = xtc_db_fetch_array($language_spanish_query);

        /** Remove translations */
        $language_id_columns = array(
            'language_id',
            'languages_id',
        );

        $tables_query = xtc_db_query(
            'SHOW TABLES;'
        );

        while ($table = xtc_db_fetch_array($tables_query)) {
            $table_name          = reset($table);
            $table_columns_query = xtc_db_query(
                sprintf('SHOW COLUMNS FROM %s;', $table_name)
            );

            $language_id_column = null;

            while ($column = xtc_db_fetch_array($table_columns_query)) {
                $column_name = $column['Field'];

                if (in_array($column_name, $language_id_columns, true)) {
                    $language_id_column = $column_name;

                    break;
                }
            }

            if ($language_id_column) {
                $query = xtc_db_query(
                    sprintf(
                        'DELETE FROM %s
                               WHERE %s = %d',
                        $table_name,
                        $language_id_column,
                        $language_spanish['languages_id']
                    )
                );
            }
        }
    }
}
