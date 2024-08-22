# 42-Inception

Docker runs a container using a Docker Image. This image needs:

  - OS (p.e. Debian)
  - Software (p.e. PHP and its dependencies)
  - App (our code)

How can we generate a Docker Image? Easy: by building a Dockerfile.

Dockerfile =(build)> Docker Image =(run)> Docker Container

How can we run an image?

docker run <'image name'>

docker run <'image name'>:<'tag'>

tag is used to specify a version


## Docker Commands
docker run <'image name'> -> runs a docker image

docker run -d <'image name'> -> runs a docker image in the background (-d -> detach)

docker pull <'image name'> -> downloads a docker image

docker images -> displays all the images we have

docker ps -> displays all the containers running in our computer

docker ps -a -> displays all the  containers that are running or have been reccently running in our computer

docker start <'container id'> -> re-starts a reccently closed container

docker logs <'container id' / 'container name'> -> displays all logs for that container

docker logs -f <'container id' / 'container name'> -> displays all logs for that container and waits for more logs

docker exec <'container id' / 'container name'> -> executes a command inside an already running container

  - -i -> initializes interactive mode
  - 
  - -t -> emulates a terminal (you need to specify the shell (p.e. sh))
  - 
docker stop <'container id' / 'container name'> -> stops a running container

