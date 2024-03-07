pipeline{
    agent any
    stages{
        stage("Laravel Build and Test"){
            steps{
                sh 'php artisan key:generate'
                sh 'php artisan test'
            }
        }
        stage("Dockerized Laravel"){
            steps{
                sh 'docker build -t rahmat/app3'
                sh 'docker tag rahmat/app3 localhost:5000/rahmat/app3'
                sh 'docker push localhost:5000/rahmat/app3'
            }
        }
        stage("Deploy"){
            steps{
                sh 'docker run --name myapp3 -p 9060:8000 -d localhost:5000/rahmat/app3'
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