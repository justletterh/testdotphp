#!/bin/bash

npm i

rm -rf ./bin
mkdir ./bin

npx sass ./scripts/style/sass.sass:./bin/sass.css ./scripts/style/scss.scss:./bin/scss.css

npx stylus ./scripts/style/styl.styl -o ./bin/styl.css

echo "Page Compiled!!!"