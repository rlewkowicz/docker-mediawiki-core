node{
  stage('Update Mediawiki') {
    checkout([$class: 'GitSCM', branches: [[name: '*/REL1_28']],
            userRemoteConfigs: [[url: 'https://github.com/rlewkowicz/docker-mediawiki-core.git']]])
    sh([script: 'bash regenmediawiki' ])
  }
}
