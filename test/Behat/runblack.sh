#!/bin/bash
IFS=$'\n'
src=(features/homePageSearchButton.feature features/suggestions.feature features/homePage.feature features/wordCloudPage.feature features/wordCloud.feature features/songList.feature)
dest=()

function checkArray
{
 for item in ${dest[@]}
 do
 [[ "$item" == "$1" ]] && return 0 # Exists in dest
 done
 return 1 # Not found
}
# Main loop
while [ "${#dest[@]}" -ne "${#src[@]}" ]
do
 rand=$[ $RANDOM % ${#src[@]} ] 
 checkArray "${src[$rand]}" || dest=(${dest[@]} "${src[$rand]}")
done

for i in 0 1 2 3 4 5
do
   bin/behat ${src[i]} >> blackbox.txt
done
