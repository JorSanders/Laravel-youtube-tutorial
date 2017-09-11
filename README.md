Docker setup for php projects.

You need docker engine and docker compose to setup a project
Dont know the versions right now will add soon

This tutorial is written based for ubuntu(16.04)

Pull or download this repo
cd to the root of this repo in your command line
run "docker-compose up -d" (the -d tag is to run in detached mode, can be left out)

thats it go to localhost and your php webserver should be up and running

to test if everything works run 
"docker ps"

to stop all running containers 
"docker stop $(docker ps -q)"

to clear all stopped containers 
"docker prune"

to list all docker networks 
"docker network ls"

to stop remove all docker networks
"docker network rm $(docker network ls -q)"

Things i'll add soon
- php versioning
- optional local database