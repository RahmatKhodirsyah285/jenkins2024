pipeline{
    agent any
    stages{
        stage("Laravel Build and Test"){
            steps{
                sh 'composer update'
                sh 'php artisan key:generate'
                sh 'php artisan test'
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