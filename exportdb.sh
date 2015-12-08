#!/bin/sh
if [ "$1" != "" ]
	then
		cd -P -- "$(dirname -- "$0")"
		PWD="$(pwd -P)"
		
		for i in `find . | grep '~'`
			do
				rm -rf $i
			done


		
		for i in `/usr/bin/svn status | grep '!' | awk '{print $2}'`
			do
				svn delete $i
			done

		for i in `/usr/bin/svn status | grep '?' | awk '{print $2}'`
			do
				svn add $i
			done
			
		/usr/bin/svn commit -m "$1"

	else
		echo "please give comment"	
	fi

