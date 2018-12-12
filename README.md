[![Build Status](https://travis-ci.org/UnsinkableSam/anaxmodule.svg?branch=master)](https://travis-ci.org/UnsinkableSam/anaxmodule)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/UnsinkableSam/anaxmodule/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/UnsinkableSam/anaxmodule/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/UnsinkableSam/anaxmodule/badges/build.png?b=master)](https://scrutinizer-ci.com/g/UnsinkableSam/anaxmodule/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/UnsinkableSam/anaxmodule/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


Install as Anax module
This is how you install the module into an existing Anax installation.

First go into composer.json and add following code snippet.

<pre>
"require": {
    "anax/anax-ramverk1-me": "^1.0.0",
    "danak/anaxmodule": "^v3.0.1"
}
</pre>

After that use the command "composer update".




When that is done you simply run.
<pre>
bash vendor/danak/anaxmodule/.anax/scaffold/postprocess.d/700_anaxmodule.bash
</pre>

Now it all should be installed and working.


Have fun!
