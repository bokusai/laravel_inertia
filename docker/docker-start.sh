#!/bin/bash

while getopts bp: OPT
do
	case $OPT in
		 b) IS_SET_OPT_B="TRUE";;
		 *) echo "$OPTは定義されていません";;
	esac
done

isUpdate=true;
originVerFilePath="./.docker-version";
localVerFilePath="./.local-docker-version";

if [ "$IS_SET_OPT_B" != "TRUE" ]; then # -b 引数が指定されたときはbuild
	if [ -e "$localVerFilePath" ]; then
		originVer=`cat ${originVerFilePath}`
		localVer=`cat ${localVerFilePath}`

		if [ "$localVer" = "$originVer" ]; then
			isUpdate=false;
		fi
	fi
fi

docker-compose down

if [ $isUpdate = 'true' ]; then
	docker-compose build --no-cache

	# buildしたらオリジンバージョンファイルをコピー
	cp -f $originVerFilePath $localVerFilePath;
fi

# コンテナ起動
docker-compose up -d

