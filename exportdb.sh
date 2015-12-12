#!/bin/sh
if [ "$1" != "" ]
	then
		cd -P -- "$(dirname -- "$0")"
		PWD="$(pwd -P)"
		
		for i in `find . | grep '~'`
			do
				rm -rf $i
			done


		
		/usr/bin/git  add --all .

			
#		/usr/bin/svn commit -m "$1"

	else
		echo "please give comment"	
	fi

