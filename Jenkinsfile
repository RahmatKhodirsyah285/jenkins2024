pipeline{
    agent any
    stages{
        stage("Laravel Build"){
            steps{
                sh 'composer update'
                sh 'php artisan key:generate'
                sh 'composer require laravel/dusk --dev'
                sh 'php artisan dusk:install'
                sh 'php artisan dusk:chrome-driver'
                sh 'php artisan test'
            }
        }
        stage("Testing"){
            steps{
                sh 'php artisan test'
                sh 'php artisan dusk'
            }
        }
        stage("Dockerized Laravel"){
            steps{
                sh 'docker build -t rahmat/apptry .'
                sh 'docker tag rahmat/apptry localhost:5000/rahmat/apptry '
                sh 'docker push localhost:5000/rahmat/apptry '
            }
        }
        stage("Deploy"){
            steps{
                sh 'docker run --name myappjen -p 9060:8000 -d localhost:5000/rahmat/apptry'
            }
        }
    }
    post{
        always{
            echo "========always========"
        }
        success{
            echo "========pipeline executed successfully ========"
        }
        failure{
            echo "========pipeline execution failed========"
        }
    }
}