<?php

set_include_path(
    implode(
        PATH_SEPARATOR,
        array(get_include_path(), './lib', './gui', './template')
    )
);
spl_autoload_register();
