while getopts 'lr' opt; do
  case $opt in
    l)
      HOST='rachel_local';
      ;;
    r)
      HOST='rachel_remote';
      ;;
    *)

  esac
done

if [[ -z $HOST ]]; then
  echo -e 'ERROR:\tmust specify either local (-l) or remote (-r)';
else
  scp -r app/* $HOST:/var/www
fi
