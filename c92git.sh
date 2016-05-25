#!/bin/bash
git fetch
git add --all
echo "Type commit message"
read commitmsg
git commit -am "$commitmsg"
git push