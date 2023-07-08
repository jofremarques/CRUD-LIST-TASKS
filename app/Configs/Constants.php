<?php

/**
 * _______________________
 * |   HEADERS CONFIGS   |
 * -----------------------
 *  As definições gerais do projeto.
 */

define("PROCESS_ENV", parse_ini_file('.env'));
define("VIEW_PATH", __DIR__."/../Views/");

/**
 * _______________________
 * |   HEADERS CONFIGS   |
 * -----------------------
 *  As configurações necessárias para exibir corretamente o cabeçalho do projeto.
 */

define("HEADER_TITLE", "Tasks Project");
define("HEADER_CHARSET", "UTF-8");
define("HEADER_LANGUAGE", "pt-br");
define("HEADER_METATAGS", []);
