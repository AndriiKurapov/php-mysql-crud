pipeline {
    agent {
        docker { image 'docker/compose' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'docker-compose up -d'
            }
        }
    }
}
