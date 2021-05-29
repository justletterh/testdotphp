#!/bin/bash

#clear

chmod +x ./c.sh
./c.sh

#clear

#php -S 0.0.0.0:80 -t .
rm -rf ./out
mkdir ./out
php ./index.php>./out/index.html