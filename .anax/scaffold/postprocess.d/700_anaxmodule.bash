#!/usr/bin/env bash
#
# anax/remserver
#
# Integrate the REM server onto an existing anax installation.
#

# Copy the configuration files
rsync -av vendor/danak/anaxmodule/config ./

# Copy the documentation
rsync -av vendor/danak/anaxmodule/view ./




rsync -av vendor/danak/anaxmodule/src ./


rsync -av vendor/danak/anaxmodule/test ./
