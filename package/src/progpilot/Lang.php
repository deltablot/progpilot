<?php

/*
 * This file is part of ProgPilot, a static analyzer for security
 *
 * @copyright 2017 Eric Therond. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */


namespace progpilot;

class Lang
{
    const FILE_DOESNT_EXIST = "The file doesn't exist";
    const FILE_AND_CODE_ARE_NULL = "Code or file must be specified before running the parser";
    const FORMAT_SANITIZERS = "Format of json sanitizer's file is incorrect";
    const FORMAT_SINKS = "Format of json sinks's file is incorrect";
    const FORMAT_SOURCES = "Format of json sources's file is incorrect";
    const FORMAT_INCLUDES = "Format of json includes's file is incorrect";
    const FORMAT_VALIDATORS = "Format of json validators's file is incorrect";
    const FORMAT_FALSE_POSITIVES = "Format of json false positives's file is incorrect";
    const FORMAT_INCLUDE_FILES = "Format of json include_file's file is incorrect";
    const FORMAT_EXCLUDE_FILES = "Format of json exclude file's file is incorrect";
    const UNABLE_TO_PARSER_YAML = "Unable to parse the YAML file configuration";
    const COMMAND_LINE_ARG = "Usage of progpilot : php progpilot.phar [--configuration path_to_config_file.yml] [files and folders (file1.php file2.php ...)]";
    const PROGPILOT_ARG_DESC = "Progpilot a static analysis tool for security purposes";
    const FILES_ARG_DESC = "Files to be analyzed";
    const CONFIG_ARG_DESC = "Read configuration from config file";
    const MAX_TIME_EXCEEDED = "Max time execution exceeded (you can increase the value with \$context->set_limit_time())";
    const MAX_DEFS_EXCEEDED = "Max definitions exceeded (you can increase the value with \$context->set_limit_defs())";
}

?>
