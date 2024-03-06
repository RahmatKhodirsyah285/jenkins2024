pipeline{
    agent any
    stages{
        stage("Laravel Test"){
            steps{
                php artisan test
            }
        }
        stage("Dockerized Laravel"){
            steps{
                docker build -t rahmat/app3
                docker tag rahmat/app3 localhost:5000/rahmat/app3
                docker push localhost:5000/rahmat/app3
            }
        }
        stage("Deploy"){
            steps{
                docker run --name myapp3 -p 9060:8000 -d localhost:5000/rahmat/app3
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