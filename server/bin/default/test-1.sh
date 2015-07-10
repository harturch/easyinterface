#!/bin/bash

. `dirname $0`/parseparams.sh

echo "<eiout>"
echo "<eicommands>"
echo "<printonconsole>"
echo "<content format='text'>"
echo "I've received the following command-line parameters:"
echo ""
echo "   $@"
echo "</content>"
echo "</printonconsole>"



echo '<printonconsole consoleid="1" consoletitle="Welcome">'
echo '<content format="text">Hello World</content></printonconsole>'

echo "</eicommands>"
echo "</eiout>"

