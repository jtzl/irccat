#!/bin/bash
# This script handles ?commands to irccat

# all our stuff is in a php script, take a look and replace the path etc:
#echo "blah" | nc localhost 12345
php -f /opt/irccat/scripts/irccat_commands.php "$@"
