#!/bin/bash

RSYNC_EXCLUSIONS="--exclude=.svn --exclude=min --exclude=img --exclude=.DS_Store"
SITE_ROOT="../public_html"
YUICOMPRESSOR_DIR="bin"

# Clear the terminal
clear


# Compress JS Files
echo -n minimizing all javascript files...
for x in `find $SITE_ROOT/js -name "*.js" | grep -v ".min.js"`; 
do
	echo
	echo ================================================================================
	echo [INFO] Minimizing `echo $x | awk -v base=$SITE_ROOT '{sub(base, ""); print}'`
	echo ================================================================================
	# compress files
    java -jar $YUICOMPRESSOR_DIR/yuicompressor-2.4.6.jar --line-break 500 -v -o `echo $x | awk '{sub(/\.js$/, ".min.js"); print}'` $x
done;
echo done!


# Compress CSS Files
echo -n tidying all css files...
for x in $(find $SITE_ROOT/css -name "*.css" | grep -v '.min.css'); do
	echo
	echo ================================================================================
	echo [INFO] Minimizing `echo $x | awk -v base=$SITE_ROOT '{sub(base, ""); print}'`
	echo ================================================================================
	min=`echo $x | awk '{sub(/\.css$/, ".min.css"); print}'`
	# compress files
	java -jar $YUICOMPRESSOR_DIR/yuicompressor-2.4.6.jar -v -o $min $x
	
	# Fix YUI compressor's broken media query handling
	perl -i -p -e 's/and\(/and \(/g;' $min
	perl -i -p -e 's/\),\(/\), \(/g;' $min
done;
echo done!

# Concatinate JS Files
echo -n concatenating global javascript files...
cat \
	$SITE_ROOT/js/global.min.js \
	> $SITE_ROOT/js/all.min.js
echo done!


# Concatinate CSS Files
echo -n concatenating global CSS files...
cat \
	$SITE_ROOT/css/reset.min.css \
	$SITE_ROOT/css/global.min.css \
	> $SITE_ROOT/css/all.min.css
echo done!
