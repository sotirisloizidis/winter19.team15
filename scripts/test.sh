#!/bin/bash
#count=100
#if [ $count -eq 100 ]; then echo 'Count is 100'; fi
#now=$(date +"%d%m%Y")

getDay() { 
  if [ $day = "Monday" ]; 
  then 
     day="monday"; 
  fi
  if [ $day = "Tuesday" ]; 
  then 
     day="tuesday"; 
  fi
  if [ $day = "Wednesday" ]; 
  then 
     day="wednesday"; 
  fi
  if [ $day = "Thursday" ]; 
  then 
     day="thursday"; 
  fi
  if [ $day = "Friday" ]; 
  then 
     day="friday"; 
  fi
}

export https_proxy=proxy.cs.ucy.ac.cy:8008

i=0
#i=$((i+1))
#day=$(date --date="$i day ago")

day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day0.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day1.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day2.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day3.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day4.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day5.txt;
i=$((i+1))


day=$(date +"%A");
if [ $day = "Saturday" ]
then
    i=$((i+1))
    day=$(date --date="$i day ago")
elif [ $day = "Sunday" ]
then 
    i=$((i+2))
    day=$(date --date="$i day ago")
fi 
nums=$(date +"%d%m%Y")
getDay
curl "https://www.ironsky-fitness.com/programming/$day-$nums" > day6.txt;

