# Installation
## Download the project
Download the project from github : 
`git clone https://github.com/clopenclassrooms/p6.git`

## Change the configuration
* Access to the project directory : `cd p6`
* Rename the file ".env.CHANGE_THIS" with the command line : 
**mv ./Symfony/myapp/.env.CHANGE_THIS ./Symfony/myapp/.env**

* In the file **./Symfony/myapp/.env** change the line : 
MAILER_DSN=gmail+smtp://**YOUR_GMAIL_EMAIL**:**YOUR_GMAIL_PASSWORD**@default

## Inject DATA
* go to the docker directory 
`cd ./docker`
* launch docker containers with the commande line : 
`docker-compose up`
* go to the root of the project
* go to the symfony docker container with the command line :
 `chmod +x ./sbash.sh` 
`./sbash.sh`
* go to directory project : 
`cd /app/myapp/`
* inject data with the command line :
`php bin/console doctrine:fixtures:load --no-interaction`

# Access to PhpMyAdmin and the websites
## PhpMyAdmin
* For access to PhpMyAdmin go to `http://localhost:8001`
* Server : **mariadb**
* Login : **bobby**
* Password : **tables**
## Website
For access to the website go to `http://localhost:8000`

You can use the test user : 
* Login : `test`
* Password : `test@test.test` 
