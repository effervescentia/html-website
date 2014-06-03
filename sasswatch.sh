sassup=`ps -ef | grep sass | wc -l`;
if [[ ${sassup:7} == '1' ]]; then
    nohup sass --watch app/sass:app/css > logs/sasswatch.log &
else
    echo 'sass is already watching this folder';
fi
