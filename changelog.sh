#!/usr/bin/env bash
#
# Create the pieace of changelog to be added to the CHANGELOG.md file
# requires two parameters
# - @latestTag: the last version released
# - @nextTag: the next version released
#

latestTag=$1
nextTag=$2

today=$(date +%F)
echo -e "## [${nextTag}] - $today\n"

echo -e "Main repo changes\n"

git log --pretty=format:"* %s (%h)" ${latestTag}...HEAD

echo -e "\n\n### Project dependencies changes\n"

composer-lock-diff --md --changelog

echo -e "\n----\n\n"
