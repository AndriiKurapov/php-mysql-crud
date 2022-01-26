pipeline {
    agent {
        docker { image 'docker/compose' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'docker-compose --version'
                sh 'docker-compose up'
            }
        }
    }
}
