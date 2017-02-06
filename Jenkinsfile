node{
  stage('Update Mediawiki') {
    #git 'https://github.com/rlewkowicz/docker-mediawiki-core.git:REL1_28'
    checkout([$class: 'GitSCM', branches: [[name: '*/REL1_28']],
            userRemoteConfigs: [[url: 'https://github.com/rlewkowicz/docker-mediawiki-core.git']]])
    sh([script: 'bash regenmediawiki' ])
  }
}
