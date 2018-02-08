#! /bin/sh

REPO="jarritos"
SERVICE="git@revolte.gmbh:revolte/"
SERVER="revolte-labor.de"
USER="revolc"

cd /tmp
if [ ! -d "$REPO" ]; then
    ## clone if directory doesn't extist
    git clone $SERVICE$REPO.git
else
    ## update if already cloned
    cd $REPO
    git pull
fi

echo "Starting upload…"


lftp -e " set ssl:verify-certificate no; set ftp:ssl-allow false; mirror -R --verbose=3 -x ^\..+ -x less -x libs -x js/libs -x node_modules -x gruntfile.js -x bower.json -x package.json -x z_sync.sh /tmp/$REPO /public_html/; exit" -p 21 -u $USER $SERVER
