# Docker-Tor-Hidden-Service-for-CTF
Establish a onion website with docker for CTF

### Pre
```
  Install docker
  Install docker-compose
```

### Usage
Download and Run
```sh
  $ git clone https://github.com/yad50968/Docker-Tor-Hidden-Service-for-CTF.git
  $ cd Docker-Tor-Hidden-Service-for-CTF
  
  ** Run docker-machine first
  $ docker-compose up 
```

Get onion url
```
  You will get the onion url in the stdout<br>
  And you can't access the website via ip address<br>
  It has to use onion url with tor browser
```

After system start, it have to take a few minutes to relay

### Reference
1. https://github.com/cmehay/docker-tor-hidden-service
2. https://github.com/nimmis/docker-apache-php7
3. https://github.com/yeasy/docker_practice/
