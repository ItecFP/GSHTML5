#https://shantanoo-desai.github.io/posts/technology/seeding-mongodb-docker-compose/
FROM mongo:latest
RUN useradd -G ${GROUP} -d /home/${USER} ${USER}
RUN mkdir -p /home/userdev/.composer && \
    chown -R userdev:userdev /home/userdev
USER ${USER}:${GROUP}
COPY ./mongodb/mongod.conf /etc/mongod.conf
COPY ./mongodb/data/*.json /root/jsons/
COPY ./mongodb/loadFiles.sh /root/
RUN whoami > .whoami.txt
EXPOSE 27017