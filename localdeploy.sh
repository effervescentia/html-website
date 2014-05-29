status=`vagrant status | grep test | grep running`;
if [[ -z $status ]]; then
  vagrant up test
fi
scp -r app/* vlocal:/var/www
