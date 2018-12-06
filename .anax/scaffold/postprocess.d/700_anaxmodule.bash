#!/usr/bin/env bash
#
# anax/remserver
#
# Integrate the REM server onto an existing anax installation.
#

# Copy the configuration files
rsync -av vendor/anax/anaxmodule/config ./

# Copy the documentation
rsync -av vendor/anax/anaxmodule/view ./




rsync -av vendor/anax/anaxmodule/src ./


rsync -av vendor/anax/anaxmodule/test ./
