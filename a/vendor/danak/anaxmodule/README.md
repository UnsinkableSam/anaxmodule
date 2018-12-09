Install as Anax module
This is how you install the module into an existing Anax installation.

First go into composer.json and add following code snippet.


"require": {

    "anax/anaxmodule": "^v2.5.2"
}


After that use the command "composer update".




When that is done you simply run.
bash vendor/danak/anaxmodule/.anax/scaffold/postprocess.d/700_anaxmodule.bash


Now it all should be installed and working.
