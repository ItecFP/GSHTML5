#!/bin/bash

ls -1 /root/jsons | while read file; do
    mongoimport -u "root" -p "1234" --authenticationDatabase admin --db gshtml5db --collection tags --file /root/jsons/$file
done;