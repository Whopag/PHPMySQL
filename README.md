<p align="center"><img src="docker.svg" width="400"></p>

<p align="center">Sample PHP Hello World app with  <a href="https://www.mysql.com/">👉 Docker 👈</a></p>

<p align="center">
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/license/Whopag/DockerPHPHelloWorld">
    </a>
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/languages/count/Whopag/DockerPHPHelloWorld">
    </a>
    <a href="#">
        <img alt="License" src="https://img.shields.io/github/last-commit/Whopag/DockerPHPHelloWorld">
    </a>
</p>

<h6 align="center">Linux</h6>

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

<h6 align="center">Windows</h6>

```bash
    docker-compose up -d
```

```bash
    docker container ls
```

```bash
    docker exec -it <container_id> bash
```

```bash
    docker exec -it $(docker container ls | grep mysql | cut -d" " -f1) bash

    mysql --user root --host localhost -p

    secret

    CREATE DATABASE db;
```