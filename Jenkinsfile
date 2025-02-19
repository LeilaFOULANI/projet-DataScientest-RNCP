pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                script {
                    git credentialsId: 'github-ssh-key', url: 'git@github.com:LeilaFOULANI/projetServicesWeb.git', branch: 'main'
                }
            }
        }

        stage('Install kubectl') {
            steps {
                sh '''
                    curl -LO "https://storage.googleapis.com/kubernetes-release/release/v1.21.0/bin/linux/amd64/kubectl"
                    chmod +x ./kubectl
                    sudo mv ./kubectl /usr/local/bin/kubectl
                '''
            }
        }

        stage('Configure AWS Credentials') {
            steps {
                script {
                    withCredentials([[$class: 'AmazonWebServicesCredentialsBinding', credentialsId: 'aws-credentials']]) {
                        sh 'aws eks --region eu-west-3 update-kubeconfig --name servicesweb-cluster'
                    }
                }
            }
        }

        stage('Build') {
            steps {
                echo 'Building application...'
            }
        }

        stage('Deploy to EKS') {
            steps {
                script {
                    withCredentials([[$class: 'AmazonWebServicesCredentialsBinding', credentialsId: 'aws-credentials']]) {
                        sh '''
                            echo "Deploying to EKS..."
                            kubectl apply -f deployment.yaml
                        '''
                    }
                }
            }
        }

        stage('Verify Deployment') {
            steps {
                script {
                    withCredentials([[$class: 'AmazonWebServicesCredentialsBinding', credentialsId: 'aws-credentials']]) {
                        def pods = sh(script: 'kubectl get pods --no-headers', returnStdout: true).trim()
                        echo "Pods status:\n${pods}"
                    }
                }
            }
        }
    }

    post {
        success {
            echo 'Déploiement réussi !'
        }
        failure {
            echo 'Le déploiement a échoué.'
        }
    }
}
