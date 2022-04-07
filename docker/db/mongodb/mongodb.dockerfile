#https://shantanoo-desai.github.io/posts/technology/seeding-mongodb-docker-compose/
FROM mongo:latest
COPY ./mongodb/mongod.conf /etc/mongod.conf
COPY ./mongodb/data/*.json /root/jsons/
COPY ./mongodb/loadFiles.sh /root/
EXPOSE 27017