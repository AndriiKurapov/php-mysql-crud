pipeline {
    agent {
        docker { image 'node:docker/compose' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'docker-compose up -d'
            }
        }
    }
}
