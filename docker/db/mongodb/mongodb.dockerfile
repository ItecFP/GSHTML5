#https://shantanoo-desai.github.io/posts/technology/seeding-mongodb-docker-compose/
FROM mongo:latest
COPY ./mongodb/mongod.conf /etc/mongod.conf
COPY ./mongodb/data/*.json /root/
CMD mongoimport --username root --password 1234 --uri mongodb://127.0.0.1:27017/gshtml5db --collection gshtml4db --drop --file /root/data.json
EXPOSE 27017