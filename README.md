<h1 align="center">DockerPHPHelloWorld</h1>

<h6 align="center">Sample PHP Hello World app with Docker</h6>

```bash
    sudo docker-compose up -d
```

```bash
    sudo docker container ls
```

```bash
    docker exec -it <container_id> bash
```

```bash
    sudo docker exec -it $(sudo docker container ls | grep mysql | cut -d" " -f1) bash

    mysql --user root --host localhost -p

    secret

    CREATE DATABASE db;
```