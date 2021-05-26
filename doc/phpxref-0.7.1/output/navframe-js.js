var TREE_ITEMS = [
['TOP', './index.html', ['application', 'application/index.html', ['cache', 'application/cache/index.html', ['index.html', 'application/cache/index.html.html']
]
, ['config', 'application/config/index.html', ['autoload.php', 'application/config/autoload.php.html']
, ['config.php', 'application/config/config.php.html']
, ['constants.php', 'application/config/constants.php.html']
, ['database.php', 'application/config/database.php.html']
, ['doctypes.php', 'application/config/doctypes.php.html']
, ['foreign_chars.php', 'application/config/foreign_chars.php.html']
, ['hooks.php', 'application/config/hooks.php.html']
, ['index.html', 'application/config/index.html.html']
, ['memcached.php', 'application/config/memcached.php.html']
, ['migration.php', 'application/config/migration.php.html']
, ['mimes.php', 'application/config/mimes.php.html']
, ['profiler.php', 'application/config/profiler.php.html']
, ['routes.php', 'application/config/routes.php.html']
, ['smileys.php', 'application/config/smileys.php.html']
, ['user_agents.php', 'application/config/user_agents.php.html']
]
, ['controllers', 'application/controllers/index.html', ['c_home.php', 'application/controllers/c_home.php.html']
, ['c_sesiones.php', 'application/controllers/c_sesiones.php.html']
, ['c_users.php', 'application/controllers/c_users.php.html']
]
, ['core', 'application/core/index.html', ['index.html', 'application/core/index.html.html']
]
, ['helpers', 'application/helpers/index.html', ['index.html', 'application/helpers/index.html.html']
]
, ['hooks', 'application/hooks/index.html', ['index.html', 'application/hooks/index.html.html']
]
, ['language', 'application/language/index.html', ['english', 'application/language/english/index.html', ['index.html', 'application/language/english/index.html.html']
]
, ['index.html', 'application/language/index.html.html']
]
, ['libraries', 'application/libraries/index.html', ['index.html', 'application/libraries/index.html.html']
]
, ['logs', 'application/logs/index.html', ['index.html', 'application/logs/index.html.html']
]
, ['models', 'application/models/index.html', ['index.html', 'application/models/index.html.html']
, ['m_instalacion.php', 'application/models/m_instalacion.php.html']
, ['m_usuarios.php', 'application/models/m_usuarios.php.html']
]
, ['third_party', 'application/third_party/index.html', ['index.html', 'application/third_party/index.html.html']
]
, ['views', 'application/views/index.html', ['V_Admin', 'application/views/V_Admin/index.html', ['BuscarTrabajadores.php', 'application/views/V_Admin/BuscarTrabajadores.php.html']
, ['Login.php', 'application/views/V_Admin/Login.php.html']
, ['ModificarIVA.php', 'application/views/V_Admin/ModificarIVA.php.html']
, ['RegistroTrabajador.php', 'application/views/V_Admin/RegistroTrabajador.php.html']
, ['addTrataminetoPrueba.php', 'application/views/V_Admin/addTrataminetoPrueba.php.html']
, ['indexAdmin.php', 'application/views/V_Admin/indexAdmin.php.html']
, ['menuAdmin.php', 'application/views/V_Admin/menuAdmin.php.html']
, ['verDatosAdmin.php', 'application/views/V_Admin/verDatosAdmin.php.html']
]
, ['V_Instalacion', 'application/views/V_Instalacion/index.html', ['Paso_1.php', 'application/views/V_Instalacion/Paso_1.php.html']
, ['Paso_2.php', 'application/views/V_Instalacion/Paso_2.php.html']
, ['Paso_3.php', 'application/views/V_Instalacion/Paso_3.php.html']
]
, ['V_Paciente', 'application/views/V_Paciente/index.html', ['indexPaciente.php', 'application/views/V_Paciente/indexPaciente.php.html']
, ['menuPaciente.php', 'application/views/V_Paciente/menuPaciente.php.html']
, ['verDatosPaciente.php', 'application/views/V_Paciente/verDatosPaciente.php.html']
]
, ['V_Principal', 'application/views/V_Principal/index.html', ['BT_Whatsapp.php', 'application/views/V_Principal/BT_Whatsapp.php.html']
, ['Nosotros.php', 'application/views/V_Principal/Nosotros.php.html']
, ['contacto.php', 'application/views/V_Principal/contacto.php.html']
, ['servicio.php', 'application/views/V_Principal/servicio.php.html']
]
, ['V_Trabajador', 'application/views/V_Trabajador/index.html', ['RegistroPaciente.php', 'application/views/V_Trabajador/RegistroPaciente.php.html']
, ['indexTrabajador.php', 'application/views/V_Trabajador/indexTrabajador.php.html']
, ['menuTrabajador.php', 'application/views/V_Trabajador/menuTrabajador.php.html']
, ['verDatoEmpleado.php', 'application/views/V_Trabajador/verDatoEmpleado.php.html']
]
, ['errors', 'application/views/errors/index.html', ['cli', 'application/views/errors/cli/index.html', ['error_404.php', 'application/views/errors/cli/error_404.php.html']
, ['error_db.php', 'application/views/errors/cli/error_db.php.html']
, ['error_exception.php', 'application/views/errors/cli/error_exception.php.html']
, ['error_general.php', 'application/views/errors/cli/error_general.php.html']
, ['error_php.php', 'application/views/errors/cli/error_php.php.html']
, ['index.html', 'application/views/errors/cli/index.html.html']
]
, ['html', 'application/views/errors/html/index.html', ['error_404.php', 'application/views/errors/html/error_404.php.html']
, ['error_db.php', 'application/views/errors/html/error_db.php.html']
, ['error_exception.php', 'application/views/errors/html/error_exception.php.html']
, ['error_general.php', 'application/views/errors/html/error_general.php.html']
, ['error_php.php', 'application/views/errors/html/error_php.php.html']
, ['index.html', 'application/views/errors/html/index.html.html']
]
, ['index.html', 'application/views/errors/index.html.html']
]
, ['legal', 'application/views/legal/index.html', ['aviso_legal.php', 'application/views/legal/aviso_legal.php.html']
, ['cookies.php', 'application/views/legal/cookies.php.html']
, ['privacidad.php', 'application/views/legal/privacidad.php.html']
]
, ['menu', 'application/views/menu/index.html', ['menu_sesion.php', 'application/views/menu/menu_sesion.php.html']
, ['menu_sinsesion.php', 'application/views/menu/menu_sinsesion.php.html']
]
, ['Alert_Cookies.php', 'application/views/Alert_Cookies.php.html']
, ['Index.php', 'application/views/Index.php.html']
, ['footer.php', 'application/views/footer.php.html']
]
, ['index.html', 'application/index.html.html']
]
, ['assets', 'assets/index.html', ['Media', 'assets/Media/index.html', ['img', 'assets/Media/img/index.html']
]
, ['css', 'assets/css/index.html', ['cssLoginAdministador.css', 'assets/css/cssLoginAdministador.css.html']
, ['estilo.css', 'assets/css/estilo.css.html']
]
, ['js', 'assets/js/index.html', ['Login.js', 'assets/js/Login.js.html']
, ['validarForm.js', 'assets/js/validarForm.js.html']
]
]
, ['jsc', 'jsc/index.html', ['tooltips.js', 'jsc/tooltips.js.html']
, ['validarForm.js', 'jsc/validarForm.js.html']
]
, ['system', 'system/index.html', ['core', 'system/core/index.html', ['compat', 'system/core/compat/index.html', ['hash.php', 'system/core/compat/hash.php.html']
, ['index.html', 'system/core/compat/index.html.html']
, ['mbstring.php', 'system/core/compat/mbstring.php.html']
, ['password.php', 'system/core/compat/password.php.html']
, ['standard.php', 'system/core/compat/standard.php.html']
]
, ['Benchmark.php', 'system/core/Benchmark.php.html']
, ['CodeIgniter.php', 'system/core/CodeIgniter.php.html']
, ['Common.php', 'system/core/Common.php.html']
, ['Config.php', 'system/core/Config.php.html']
, ['Controller.php', 'system/core/Controller.php.html']
, ['Exceptions.php', 'system/core/Exceptions.php.html']
, ['Hooks.php', 'system/core/Hooks.php.html']
, ['Input.php', 'system/core/Input.php.html']
, ['Lang.php', 'system/core/Lang.php.html']
, ['Loader.php', 'system/core/Loader.php.html']
, ['Log.php', 'system/core/Log.php.html']
, ['Model.php', 'system/core/Model.php.html']
, ['Output.php', 'system/core/Output.php.html']
, ['Router.php', 'system/core/Router.php.html']
, ['Security.php', 'system/core/Security.php.html']
, ['URI.php', 'system/core/URI.php.html']
, ['Utf8.php', 'system/core/Utf8.php.html']
, ['index.html', 'system/core/index.html.html']
]
, ['database', 'system/database/index.html', ['drivers', 'system/database/drivers/index.html', ['cubrid', 'system/database/drivers/cubrid/index.html', ['cubrid_driver.php', 'system/database/drivers/cubrid/cubrid_driver.php.html']
, ['cubrid_forge.php', 'system/database/drivers/cubrid/cubrid_forge.php.html']
, ['cubrid_result.php', 'system/database/drivers/cubrid/cubrid_result.php.html']
, ['cubrid_utility.php', 'system/database/drivers/cubrid/cubrid_utility.php.html']
, ['index.html', 'system/database/drivers/cubrid/index.html.html']
]
, ['ibase', 'system/database/drivers/ibase/index.html', ['ibase_driver.php', 'system/database/drivers/ibase/ibase_driver.php.html']
, ['ibase_forge.php', 'system/database/drivers/ibase/ibase_forge.php.html']
, ['ibase_result.php', 'system/database/drivers/ibase/ibase_result.php.html']
, ['ibase_utility.php', 'system/database/drivers/ibase/ibase_utility.php.html']
, ['index.html', 'system/database/drivers/ibase/index.html.html']
]
, ['mssql', 'system/database/drivers/mssql/index.html', ['index.html', 'system/database/drivers/mssql/index.html.html']
, ['mssql_driver.php', 'system/database/drivers/mssql/mssql_driver.php.html']
, ['mssql_forge.php', 'system/database/drivers/mssql/mssql_forge.php.html']
, ['mssql_result.php', 'system/database/drivers/mssql/mssql_result.php.html']
, ['mssql_utility.php', 'system/database/drivers/mssql/mssql_utility.php.html']
]
, ['mysql', 'system/database/drivers/mysql/index.html', ['index.html', 'system/database/drivers/mysql/index.html.html']
, ['mysql_driver.php', 'system/database/drivers/mysql/mysql_driver.php.html']
, ['mysql_forge.php', 'system/database/drivers/mysql/mysql_forge.php.html']
, ['mysql_result.php', 'system/database/drivers/mysql/mysql_result.php.html']
, ['mysql_utility.php', 'system/database/drivers/mysql/mysql_utility.php.html']
]
, ['mysqli', 'system/database/drivers/mysqli/index.html', ['index.html', 'system/database/drivers/mysqli/index.html.html']
, ['mysqli_driver.php', 'system/database/drivers/mysqli/mysqli_driver.php.html']
, ['mysqli_forge.php', 'system/database/drivers/mysqli/mysqli_forge.php.html']
, ['mysqli_result.php', 'system/database/drivers/mysqli/mysqli_result.php.html']
, ['mysqli_utility.php', 'system/database/drivers/mysqli/mysqli_utility.php.html']
]
, ['oci8', 'system/database/drivers/oci8/index.html', ['index.html', 'system/database/drivers/oci8/index.html.html']
, ['oci8_driver.php', 'system/database/drivers/oci8/oci8_driver.php.html']
, ['oci8_forge.php', 'system/database/drivers/oci8/oci8_forge.php.html']
, ['oci8_result.php', 'system/database/drivers/oci8/oci8_result.php.html']
, ['oci8_utility.php', 'system/database/drivers/oci8/oci8_utility.php.html']
]
, ['odbc', 'system/database/drivers/odbc/index.html', ['index.html', 'system/database/drivers/odbc/index.html.html']
, ['odbc_driver.php', 'system/database/drivers/odbc/odbc_driver.php.html']
, ['odbc_forge.php', 'system/database/drivers/odbc/odbc_forge.php.html']
, ['odbc_result.php', 'system/database/drivers/odbc/odbc_result.php.html']
, ['odbc_utility.php', 'system/database/drivers/odbc/odbc_utility.php.html']
]
, ['pdo', 'system/database/drivers/pdo/index.html', ['subdrivers', 'system/database/drivers/pdo/subdrivers/index.html', ['index.html', 'system/database/drivers/pdo/subdrivers/index.html.html']
, ['pdo_4d_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_4d_driver.php.html']
, ['pdo_4d_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_4d_forge.php.html']
, ['pdo_cubrid_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_cubrid_driver.php.html']
, ['pdo_cubrid_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_cubrid_forge.php.html']
, ['pdo_dblib_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_dblib_driver.php.html']
, ['pdo_dblib_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_dblib_forge.php.html']
, ['pdo_firebird_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_firebird_driver.php.html']
, ['pdo_firebird_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_firebird_forge.php.html']
, ['pdo_ibm_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_ibm_driver.php.html']
, ['pdo_ibm_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_ibm_forge.php.html']
, ['pdo_informix_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_informix_driver.php.html']
, ['pdo_informix_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_informix_forge.php.html']
, ['pdo_mysql_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_mysql_driver.php.html']
, ['pdo_mysql_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_mysql_forge.php.html']
, ['pdo_oci_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_oci_driver.php.html']
, ['pdo_oci_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_oci_forge.php.html']
, ['pdo_odbc_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_odbc_driver.php.html']
, ['pdo_odbc_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_odbc_forge.php.html']
, ['pdo_pgsql_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_pgsql_driver.php.html']
, ['pdo_pgsql_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_pgsql_forge.php.html']
, ['pdo_sqlite_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_sqlite_driver.php.html']
, ['pdo_sqlite_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_sqlite_forge.php.html']
, ['pdo_sqlsrv_driver.php', 'system/database/drivers/pdo/subdrivers/pdo_sqlsrv_driver.php.html']
, ['pdo_sqlsrv_forge.php', 'system/database/drivers/pdo/subdrivers/pdo_sqlsrv_forge.php.html']
]
, ['index.html', 'system/database/drivers/pdo/index.html.html']
, ['pdo_driver.php', 'system/database/drivers/pdo/pdo_driver.php.html']
, ['pdo_forge.php', 'system/database/drivers/pdo/pdo_forge.php.html']
, ['pdo_result.php', 'system/database/drivers/pdo/pdo_result.php.html']
, ['pdo_utility.php', 'system/database/drivers/pdo/pdo_utility.php.html']
]
, ['postgre', 'system/database/drivers/postgre/index.html', ['index.html', 'system/database/drivers/postgre/index.html.html']
, ['postgre_driver.php', 'system/database/drivers/postgre/postgre_driver.php.html']
, ['postgre_forge.php', 'system/database/drivers/postgre/postgre_forge.php.html']
, ['postgre_result.php', 'system/database/drivers/postgre/postgre_result.php.html']
, ['postgre_utility.php', 'system/database/drivers/postgre/postgre_utility.php.html']
]
, ['sqlite', 'system/database/drivers/sqlite/index.html', ['index.html', 'system/database/drivers/sqlite/index.html.html']
, ['sqlite_driver.php', 'system/database/drivers/sqlite/sqlite_driver.php.html']
, ['sqlite_forge.php', 'system/database/drivers/sqlite/sqlite_forge.php.html']
, ['sqlite_result.php', 'system/database/drivers/sqlite/sqlite_result.php.html']
, ['sqlite_utility.php', 'system/database/drivers/sqlite/sqlite_utility.php.html']
]
, ['sqlite3', 'system/database/drivers/sqlite3/index.html', ['index.html', 'system/database/drivers/sqlite3/index.html.html']
, ['sqlite3_driver.php', 'system/database/drivers/sqlite3/sqlite3_driver.php.html']
, ['sqlite3_forge.php', 'system/database/drivers/sqlite3/sqlite3_forge.php.html']
, ['sqlite3_result.php', 'system/database/drivers/sqlite3/sqlite3_result.php.html']
, ['sqlite3_utility.php', 'system/database/drivers/sqlite3/sqlite3_utility.php.html']
]
, ['sqlsrv', 'system/database/drivers/sqlsrv/index.html', ['index.html', 'system/database/drivers/sqlsrv/index.html.html']
, ['sqlsrv_driver.php', 'system/database/drivers/sqlsrv/sqlsrv_driver.php.html']
, ['sqlsrv_forge.php', 'system/database/drivers/sqlsrv/sqlsrv_forge.php.html']
, ['sqlsrv_result.php', 'system/database/drivers/sqlsrv/sqlsrv_result.php.html']
, ['sqlsrv_utility.php', 'system/database/drivers/sqlsrv/sqlsrv_utility.php.html']
]
, ['index.html', 'system/database/drivers/index.html.html']
]
, ['DB.php', 'system/database/DB.php.html']
, ['DB_cache.php', 'system/database/DB_cache.php.html']
, ['DB_driver.php', 'system/database/DB_driver.php.html']
, ['DB_forge.php', 'system/database/DB_forge.php.html']
, ['DB_query_builder.php', 'system/database/DB_query_builder.php.html']
, ['DB_result.php', 'system/database/DB_result.php.html']
, ['DB_utility.php', 'system/database/DB_utility.php.html']
, ['index.html', 'system/database/index.html.html']
]
, ['fonts', 'system/fonts/index.html', ['index.html', 'system/fonts/index.html.html']
]
, ['helpers', 'system/helpers/index.html', ['array_helper.php', 'system/helpers/array_helper.php.html']
, ['captcha_helper.php', 'system/helpers/captcha_helper.php.html']
, ['cookie_helper.php', 'system/helpers/cookie_helper.php.html']
, ['date_helper.php', 'system/helpers/date_helper.php.html']
, ['directory_helper.php', 'system/helpers/directory_helper.php.html']
, ['download_helper.php', 'system/helpers/download_helper.php.html']
, ['email_helper.php', 'system/helpers/email_helper.php.html']
, ['file_helper.php', 'system/helpers/file_helper.php.html']
, ['form_helper.php', 'system/helpers/form_helper.php.html']
, ['html_helper.php', 'system/helpers/html_helper.php.html']
, ['index.html', 'system/helpers/index.html.html']
, ['inflector_helper.php', 'system/helpers/inflector_helper.php.html']
, ['language_helper.php', 'system/helpers/language_helper.php.html']
, ['number_helper.php', 'system/helpers/number_helper.php.html']
, ['path_helper.php', 'system/helpers/path_helper.php.html']
, ['security_helper.php', 'system/helpers/security_helper.php.html']
, ['smiley_helper.php', 'system/helpers/smiley_helper.php.html']
, ['string_helper.php', 'system/helpers/string_helper.php.html']
, ['text_helper.php', 'system/helpers/text_helper.php.html']
, ['typography_helper.php', 'system/helpers/typography_helper.php.html']
, ['url_helper.php', 'system/helpers/url_helper.php.html']
, ['xml_helper.php', 'system/helpers/xml_helper.php.html']
]
, ['language', 'system/language/index.html', ['english', 'system/language/english/index.html', ['calendar_lang.php', 'system/language/english/calendar_lang.php.html']
, ['date_lang.php', 'system/language/english/date_lang.php.html']
, ['db_lang.php', 'system/language/english/db_lang.php.html']
, ['email_lang.php', 'system/language/english/email_lang.php.html']
, ['form_validation_lang.php', 'system/language/english/form_validation_lang.php.html']
, ['ftp_lang.php', 'system/language/english/ftp_lang.php.html']
, ['imglib_lang.php', 'system/language/english/imglib_lang.php.html']
, ['index.html', 'system/language/english/index.html.html']
, ['migration_lang.php', 'system/language/english/migration_lang.php.html']
, ['number_lang.php', 'system/language/english/number_lang.php.html']
, ['pagination_lang.php', 'system/language/english/pagination_lang.php.html']
, ['profiler_lang.php', 'system/language/english/profiler_lang.php.html']
, ['unit_test_lang.php', 'system/language/english/unit_test_lang.php.html']
, ['upload_lang.php', 'system/language/english/upload_lang.php.html']
]
, ['index.html', 'system/language/index.html.html']
]
, ['libraries', 'system/libraries/index.html', ['Cache', 'system/libraries/Cache/index.html', ['drivers', 'system/libraries/Cache/drivers/index.html', ['Cache_apc.php', 'system/libraries/Cache/drivers/Cache_apc.php.html']
, ['Cache_dummy.php', 'system/libraries/Cache/drivers/Cache_dummy.php.html']
, ['Cache_file.php', 'system/libraries/Cache/drivers/Cache_file.php.html']
, ['Cache_memcached.php', 'system/libraries/Cache/drivers/Cache_memcached.php.html']
, ['Cache_redis.php', 'system/libraries/Cache/drivers/Cache_redis.php.html']
, ['Cache_wincache.php', 'system/libraries/Cache/drivers/Cache_wincache.php.html']
, ['index.html', 'system/libraries/Cache/drivers/index.html.html']
]
, ['Cache.php', 'system/libraries/Cache/Cache.php.html']
, ['index.html', 'system/libraries/Cache/index.html.html']
]
, ['Javascript', 'system/libraries/Javascript/index.html', ['Jquery.php', 'system/libraries/Javascript/Jquery.php.html']
, ['index.html', 'system/libraries/Javascript/index.html.html']
]
, ['Session', 'system/libraries/Session/index.html', ['drivers', 'system/libraries/Session/drivers/index.html', ['Session_database_driver.php', 'system/libraries/Session/drivers/Session_database_driver.php.html']
, ['Session_files_driver.php', 'system/libraries/Session/drivers/Session_files_driver.php.html']
, ['Session_memcached_driver.php', 'system/libraries/Session/drivers/Session_memcached_driver.php.html']
, ['Session_redis_driver.php', 'system/libraries/Session/drivers/Session_redis_driver.php.html']
, ['index.html', 'system/libraries/Session/drivers/index.html.html']
]
, ['Session.php', 'system/libraries/Session/Session.php.html']
, ['SessionHandlerInterface.php', 'system/libraries/Session/SessionHandlerInterface.php.html']
, ['Session_driver.php', 'system/libraries/Session/Session_driver.php.html']
, ['index.html', 'system/libraries/Session/index.html.html']
]
, ['Calendar.php', 'system/libraries/Calendar.php.html']
, ['Cart.php', 'system/libraries/Cart.php.html']
, ['Driver.php', 'system/libraries/Driver.php.html']
, ['Email.php', 'system/libraries/Email.php.html']
, ['Encrypt.php', 'system/libraries/Encrypt.php.html']
, ['Encryption.php', 'system/libraries/Encryption.php.html']
, ['Form_validation.php', 'system/libraries/Form_validation.php.html']
, ['Ftp.php', 'system/libraries/Ftp.php.html']
, ['Image_lib.php', 'system/libraries/Image_lib.php.html']
, ['Javascript.php', 'system/libraries/Javascript.php.html']
, ['Migration.php', 'system/libraries/Migration.php.html']
, ['Pagination.php', 'system/libraries/Pagination.php.html']
, ['Parser.php', 'system/libraries/Parser.php.html']
, ['Profiler.php', 'system/libraries/Profiler.php.html']
, ['Table.php', 'system/libraries/Table.php.html']
, ['Trackback.php', 'system/libraries/Trackback.php.html']
, ['Typography.php', 'system/libraries/Typography.php.html']
, ['Unit_test.php', 'system/libraries/Unit_test.php.html']
, ['Upload.php', 'system/libraries/Upload.php.html']
, ['User_agent.php', 'system/libraries/User_agent.php.html']
, ['Xmlrpc.php', 'system/libraries/Xmlrpc.php.html']
, ['Xmlrpcs.php', 'system/libraries/Xmlrpcs.php.html']
, ['Zip.php', 'system/libraries/Zip.php.html']
, ['index.html', 'system/libraries/index.html.html']
]
, ['index.html', 'system/index.html.html']
]
, ['user_guide', 'user_guide/index.html', ['_downloads', 'user_guide/_downloads/index.html']
, ['_images', 'user_guide/_images/index.html']
, ['_static', 'user_guide/_static/index.html', ['css', 'user_guide/_static/css/index.html', ['badge_only.css', 'user_guide/_static/css/badge_only.css.html']
, ['citheme.css', 'user_guide/_static/css/citheme.css.html']
, ['theme.css', 'user_guide/_static/css/theme.css.html']
]
, ['fonts', 'user_guide/_static/fonts/index.html', ['fontawesome-webfont.svg', 'user_guide/_static/fonts/fontawesome-webfont.svg.html']
]
, ['images', 'user_guide/_static/images/index.html']
, ['js', 'user_guide/_static/js/index.html', ['oldtheme.js', 'user_guide/_static/js/oldtheme.js.html']
, ['theme.js', 'user_guide/_static/js/theme.js.html']
]
, ['basic.css', 'user_guide/_static/basic.css.html']
, ['doctools.js', 'user_guide/_static/doctools.js.html']
, ['jquery-3.1.0.js', 'user_guide/_static/jquery-3.1.0.js.html']
, ['jquery.js', 'user_guide/_static/jquery.js.html']
, ['pygments.css', 'user_guide/_static/pygments.css.html']
, ['searchtools.js', 'user_guide/_static/searchtools.js.html']
, ['underscore-1.3.1.js', 'user_guide/_static/underscore-1.3.1.js.html']
, ['underscore.js', 'user_guide/_static/underscore.js.html']
, ['websupport.js', 'user_guide/_static/websupport.js.html']
]
, ['contributing', 'user_guide/contributing/index.html', ['index.html', 'user_guide/contributing/index.html.html']
]
, ['database', 'user_guide/database/index.html', ['caching.html', 'user_guide/database/caching.html.html']
, ['call_function.html', 'user_guide/database/call_function.html.html']
, ['configuration.html', 'user_guide/database/configuration.html.html']
, ['connecting.html', 'user_guide/database/connecting.html.html']
, ['db_driver_reference.html', 'user_guide/database/db_driver_reference.html.html']
, ['examples.html', 'user_guide/database/examples.html.html']
, ['forge.html', 'user_guide/database/forge.html.html']
, ['helpers.html', 'user_guide/database/helpers.html.html']
, ['index.html', 'user_guide/database/index.html.html']
, ['metadata.html', 'user_guide/database/metadata.html.html']
, ['queries.html', 'user_guide/database/queries.html.html']
, ['query_builder.html', 'user_guide/database/query_builder.html.html']
, ['results.html', 'user_guide/database/results.html.html']
, ['transactions.html', 'user_guide/database/transactions.html.html']
, ['utilities.html', 'user_guide/database/utilities.html.html']
]
, ['documentation', 'user_guide/documentation/index.html', ['index.html', 'user_guide/documentation/index.html.html']
]
, ['general', 'user_guide/general/index.html', ['alternative_php.html', 'user_guide/general/alternative_php.html.html']
, ['ancillary_classes.html', 'user_guide/general/ancillary_classes.html.html']
, ['autoloader.html', 'user_guide/general/autoloader.html.html']
, ['caching.html', 'user_guide/general/caching.html.html']
, ['cli.html', 'user_guide/general/cli.html.html']
, ['common_functions.html', 'user_guide/general/common_functions.html.html']
, ['compatibility_functions.html', 'user_guide/general/compatibility_functions.html.html']
, ['controllers.html', 'user_guide/general/controllers.html.html']
, ['core_classes.html', 'user_guide/general/core_classes.html.html']
, ['creating_drivers.html', 'user_guide/general/creating_drivers.html.html']
, ['creating_libraries.html', 'user_guide/general/creating_libraries.html.html']
, ['credits.html', 'user_guide/general/credits.html.html']
, ['drivers.html', 'user_guide/general/drivers.html.html']
, ['environments.html', 'user_guide/general/environments.html.html']
, ['errors.html', 'user_guide/general/errors.html.html']
, ['helpers.html', 'user_guide/general/helpers.html.html']
, ['hooks.html', 'user_guide/general/hooks.html.html']
, ['index.html', 'user_guide/general/index.html.html']
, ['libraries.html', 'user_guide/general/libraries.html.html']
, ['managing_apps.html', 'user_guide/general/managing_apps.html.html']
, ['models.html', 'user_guide/general/models.html.html']
, ['profiling.html', 'user_guide/general/profiling.html.html']
, ['requirements.html', 'user_guide/general/requirements.html.html']
, ['reserved_names.html', 'user_guide/general/reserved_names.html.html']
, ['routing.html', 'user_guide/general/routing.html.html']
, ['security.html', 'user_guide/general/security.html.html']
, ['styleguide.html', 'user_guide/general/styleguide.html.html']
, ['urls.html', 'user_guide/general/urls.html.html']
, ['views.html', 'user_guide/general/views.html.html']
, ['welcome.html', 'user_guide/general/welcome.html.html']
]
, ['helpers', 'user_guide/helpers/index.html', ['array_helper.html', 'user_guide/helpers/array_helper.html.html']
, ['captcha_helper.html', 'user_guide/helpers/captcha_helper.html.html']
, ['cookie_helper.html', 'user_guide/helpers/cookie_helper.html.html']
, ['date_helper.html', 'user_guide/helpers/date_helper.html.html']
, ['directory_helper.html', 'user_guide/helpers/directory_helper.html.html']
, ['download_helper.html', 'user_guide/helpers/download_helper.html.html']
, ['email_helper.html', 'user_guide/helpers/email_helper.html.html']
, ['file_helper.html', 'user_guide/helpers/file_helper.html.html']
, ['form_helper.html', 'user_guide/helpers/form_helper.html.html']
, ['html_helper.html', 'user_guide/helpers/html_helper.html.html']
, ['index.html', 'user_guide/helpers/index.html.html']
, ['inflector_helper.html', 'user_guide/helpers/inflector_helper.html.html']
, ['language_helper.html', 'user_guide/helpers/language_helper.html.html']
, ['number_helper.html', 'user_guide/helpers/number_helper.html.html']
, ['path_helper.html', 'user_guide/helpers/path_helper.html.html']
, ['security_helper.html', 'user_guide/helpers/security_helper.html.html']
, ['smiley_helper.html', 'user_guide/helpers/smiley_helper.html.html']
, ['string_helper.html', 'user_guide/helpers/string_helper.html.html']
, ['text_helper.html', 'user_guide/helpers/text_helper.html.html']
, ['typography_helper.html', 'user_guide/helpers/typography_helper.html.html']
, ['url_helper.html', 'user_guide/helpers/url_helper.html.html']
, ['xml_helper.html', 'user_guide/helpers/xml_helper.html.html']
]
, ['installation', 'user_guide/installation/index.html', ['downloads.html', 'user_guide/installation/downloads.html.html']
, ['index.html', 'user_guide/installation/index.html.html']
, ['troubleshooting.html', 'user_guide/installation/troubleshooting.html.html']
, ['upgrade_120.html', 'user_guide/installation/upgrade_120.html.html']
, ['upgrade_130.html', 'user_guide/installation/upgrade_130.html.html']
, ['upgrade_131.html', 'user_guide/installation/upgrade_131.html.html']
, ['upgrade_132.html', 'user_guide/installation/upgrade_132.html.html']
, ['upgrade_133.html', 'user_guide/installation/upgrade_133.html.html']
, ['upgrade_140.html', 'user_guide/installation/upgrade_140.html.html']
, ['upgrade_141.html', 'user_guide/installation/upgrade_141.html.html']
, ['upgrade_150.html', 'user_guide/installation/upgrade_150.html.html']
, ['upgrade_152.html', 'user_guide/installation/upgrade_152.html.html']
, ['upgrade_153.html', 'user_guide/installation/upgrade_153.html.html']
, ['upgrade_154.html', 'user_guide/installation/upgrade_154.html.html']
, ['upgrade_160.html', 'user_guide/installation/upgrade_160.html.html']
, ['upgrade_161.html', 'user_guide/installation/upgrade_161.html.html']
, ['upgrade_162.html', 'user_guide/installation/upgrade_162.html.html']
, ['upgrade_163.html', 'user_guide/installation/upgrade_163.html.html']
, ['upgrade_170.html', 'user_guide/installation/upgrade_170.html.html']
, ['upgrade_171.html', 'user_guide/installation/upgrade_171.html.html']
, ['upgrade_172.html', 'user_guide/installation/upgrade_172.html.html']
, ['upgrade_200.html', 'user_guide/installation/upgrade_200.html.html']
, ['upgrade_201.html', 'user_guide/installation/upgrade_201.html.html']
, ['upgrade_202.html', 'user_guide/installation/upgrade_202.html.html']
, ['upgrade_203.html', 'user_guide/installation/upgrade_203.html.html']
, ['upgrade_210.html', 'user_guide/installation/upgrade_210.html.html']
, ['upgrade_211.html', 'user_guide/installation/upgrade_211.html.html']
, ['upgrade_212.html', 'user_guide/installation/upgrade_212.html.html']
, ['upgrade_213.html', 'user_guide/installation/upgrade_213.html.html']
, ['upgrade_214.html', 'user_guide/installation/upgrade_214.html.html']
, ['upgrade_220.html', 'user_guide/installation/upgrade_220.html.html']
, ['upgrade_221.html', 'user_guide/installation/upgrade_221.html.html']
, ['upgrade_222.html', 'user_guide/installation/upgrade_222.html.html']
, ['upgrade_223.html', 'user_guide/installation/upgrade_223.html.html']
, ['upgrade_300.html', 'user_guide/installation/upgrade_300.html.html']
, ['upgrade_301.html', 'user_guide/installation/upgrade_301.html.html']
, ['upgrade_302.html', 'user_guide/installation/upgrade_302.html.html']
, ['upgrade_303.html', 'user_guide/installation/upgrade_303.html.html']
, ['upgrade_304.html', 'user_guide/installation/upgrade_304.html.html']
, ['upgrade_305.html', 'user_guide/installation/upgrade_305.html.html']
, ['upgrade_306.html', 'user_guide/installation/upgrade_306.html.html']
, ['upgrade_310.html', 'user_guide/installation/upgrade_310.html.html']
, ['upgrade_311.html', 'user_guide/installation/upgrade_311.html.html']
, ['upgrade_3110.html', 'user_guide/installation/upgrade_3110.html.html']
, ['upgrade_3111.html', 'user_guide/installation/upgrade_3111.html.html']
, ['upgrade_312.html', 'user_guide/installation/upgrade_312.html.html']
, ['upgrade_313.html', 'user_guide/installation/upgrade_313.html.html']
, ['upgrade_314.html', 'user_guide/installation/upgrade_314.html.html']
, ['upgrade_315.html', 'user_guide/installation/upgrade_315.html.html']
, ['upgrade_316.html', 'user_guide/installation/upgrade_316.html.html']
, ['upgrade_317.html', 'user_guide/installation/upgrade_317.html.html']
, ['upgrade_318.html', 'user_guide/installation/upgrade_318.html.html']
, ['upgrade_319.html', 'user_guide/installation/upgrade_319.html.html']
, ['upgrade_b11.html', 'user_guide/installation/upgrade_b11.html.html']
, ['upgrading.html', 'user_guide/installation/upgrading.html.html']
]
, ['libraries', 'user_guide/libraries/index.html', ['benchmark.html', 'user_guide/libraries/benchmark.html.html']
, ['caching.html', 'user_guide/libraries/caching.html.html']
, ['calendar.html', 'user_guide/libraries/calendar.html.html']
, ['cart.html', 'user_guide/libraries/cart.html.html']
, ['config.html', 'user_guide/libraries/config.html.html']
, ['email.html', 'user_guide/libraries/email.html.html']
, ['encrypt.html', 'user_guide/libraries/encrypt.html.html']
, ['encryption.html', 'user_guide/libraries/encryption.html.html']
, ['file_uploading.html', 'user_guide/libraries/file_uploading.html.html']
, ['form_validation.html', 'user_guide/libraries/form_validation.html.html']
, ['ftp.html', 'user_guide/libraries/ftp.html.html']
, ['image_lib.html', 'user_guide/libraries/image_lib.html.html']
, ['index.html', 'user_guide/libraries/index.html.html']
, ['input.html', 'user_guide/libraries/input.html.html']
, ['javascript.html', 'user_guide/libraries/javascript.html.html']
, ['language.html', 'user_guide/libraries/language.html.html']
, ['loader.html', 'user_guide/libraries/loader.html.html']
, ['migration.html', 'user_guide/libraries/migration.html.html']
, ['output.html', 'user_guide/libraries/output.html.html']
, ['pagination.html', 'user_guide/libraries/pagination.html.html']
, ['parser.html', 'user_guide/libraries/parser.html.html']
, ['security.html', 'user_guide/libraries/security.html.html']
, ['sessions.html', 'user_guide/libraries/sessions.html.html']
, ['table.html', 'user_guide/libraries/table.html.html']
, ['trackback.html', 'user_guide/libraries/trackback.html.html']
, ['typography.html', 'user_guide/libraries/typography.html.html']
, ['unit_testing.html', 'user_guide/libraries/unit_testing.html.html']
, ['uri.html', 'user_guide/libraries/uri.html.html']
, ['user_agent.html', 'user_guide/libraries/user_agent.html.html']
, ['xmlrpc.html', 'user_guide/libraries/xmlrpc.html.html']
, ['zip.html', 'user_guide/libraries/zip.html.html']
]
, ['overview', 'user_guide/overview/index.html', ['appflow.html', 'user_guide/overview/appflow.html.html']
, ['at_a_glance.html', 'user_guide/overview/at_a_glance.html.html']
, ['features.html', 'user_guide/overview/features.html.html']
, ['getting_started.html', 'user_guide/overview/getting_started.html.html']
, ['goals.html', 'user_guide/overview/goals.html.html']
, ['index.html', 'user_guide/overview/index.html.html']
, ['mvc.html', 'user_guide/overview/mvc.html.html']
]
, ['tutorial', 'user_guide/tutorial/index.html', ['conclusion.html', 'user_guide/tutorial/conclusion.html.html']
, ['create_news_items.html', 'user_guide/tutorial/create_news_items.html.html']
, ['index.html', 'user_guide/tutorial/index.html.html']
, ['news_section.html', 'user_guide/tutorial/news_section.html.html']
, ['static_pages.html', 'user_guide/tutorial/static_pages.html.html']
]
, ['DCO.html', 'user_guide/DCO.html.html']
, ['changelog.html', 'user_guide/changelog.html.html']
, ['genindex.html', 'user_guide/genindex.html.html']
, ['index.html', 'user_guide/index.html.html']
, ['license.html', 'user_guide/license.html.html']
, ['search.html', 'user_guide/search.html.html']
, ['searchindex.js', 'user_guide/searchindex.js.html']
]
, ['composer.json', 'composer.json.html']
, ['contributing.md', 'contributing.md.html']
, ['index.php', 'index.php.html']
, ['license.txt', 'license.txt.html']
, ['readme.rst', 'readme.rst.html']
, ['sas.html', 'sas.html.html']
]
];