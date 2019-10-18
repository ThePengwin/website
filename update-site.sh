#!/bin/bash

#build site
npm run production

gen=$(cd build_production && pwd)
repo=$(mktemp -d -t site-update-XXXXXXXXXX)

echo 'Generated files Path: '$gen
echo 'Creating working repo for live: '$repo

git clone git@github.com:ThePengwin/ThePengwin.github.io.git $repo

#Update new files
cd $gen
find . -path ./.git -prune -o -type f -print0 | while read -d $'\0' file
do
    if [ -f "$repo/$file" ]
    then
        echo -e "[\e[93mupdate\e[39m] "$file
    else
        echo -e "[\e[92mnew\e[39m] "$file
    fi
    mkdir -p $(dirname $repo/$file)
    cp $file $repo/$file
    (cd $repo && git add $file)
done

#delete old files
cd $repo
find . -path ./.git -prune -o -type f -print0 | while read -d $'\0' file
do
    if [ ! -f "$gen/$file" ]
    then
        echo -e "[\e[91mdelete\e[39m] "$file
        git rm $file &> /dev/null || rm $file || (echo "Failed to delete $file!" && exit 1)
    fi
done

git commit
git push

rm -rf $repo