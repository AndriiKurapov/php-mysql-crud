pipeline {
    agent {
        docker { image 'docker/compose' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'sudo docker-compose up -d'
            }
        }
    }
}
