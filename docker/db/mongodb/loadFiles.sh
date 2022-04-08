#!/bin/bash

ls -1 /root/jsons | while read file; do
    mongoimport -u ${MONGO_INITDB_ROOT_USERNAME} -p ${MONGO_INITDB_ROOT_PASSWORD} --authenticationDatabase admin --db ${MONGO_INITDB_DATABASE} --collection ${MONGO_INITDB_COLLECTION} --file /root/jsons/$file
done;