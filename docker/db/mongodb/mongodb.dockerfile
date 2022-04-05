FROM mongo:latest
COPY ./mongodb/mongod.conf /etc/mongod.conf
EXPOSE 27017